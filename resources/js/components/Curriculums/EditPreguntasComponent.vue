<template>
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row pt-4">
                  <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                        <label>Nombre: </label>
                        <input class="form-control" type="text" name="name" v-model="name">
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                        <label>Descripción: </label>
                        <textarea class="form-control" rows="6" maxlength="500" v-model="description"></textarea>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                        <label>Estado: </label>
                        <div class="custom-control custom-switch">
                          <input v-model="state" type="checkbox" class="custom-control-input" id="customSwitch1">
                          <label class="custom-control-label" for="customSwitch1">{{ state?'Publicada':'No publicada' }}</label>
                        </div>
                      </div>
                  </div>
              </div>

              <PreguntasComponent />

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="d-flex justify-content-between">
                <button class="btn btn-danger" @click="back()">Volver</button>
                <button class="btn btn-primary" @click="updateEncuesta()">Actualizar</button>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</template>

<script>
import PreguntasComponent from './PreguntasComponent';

export default {
  props: ['id'],
  components: {
    PreguntasComponent
  },
  data() {
    return {
      name:'',
      description:'',
      state:null,
    }
  },
  computed: {
    preguntas:{
      get(){
        return this.$store.state.preguntas;
      }
    }
  },
  methods: {
    async getEncuesta() {
      const res = await axios.get('/api/encuestas/'+ this.id);

      this.name = res.data.encuesta.name;
      this.description = res.data.encuesta.description;
      this.state = res.data.encuesta.state;



      res.data.preguntas.forEach((element)=>{
        let id_pregunta_aux = this.$store.state.id_pregunta
        let preg = {
          'id_pregunta':id_pregunta_aux,
          'pregunta': element.pregunta,
          'opciones':[]
        }; 
        this.$store.commit('addPregunta', preg);

        element.options.forEach((ele)=>{
         let op = {
            'id_opcion': this.$store.state.id_opcion, 
            'opcion':ele.opcion, 
            'valor':ele.valor
          };

          this.$store.commit('addOpcion',  {'id_pregunta': id_pregunta_aux,'opcion': op});
        })

      })
    },

    back(){
       window.location.href = window.axios.defaults.baseURL+'admin/encuestas';
    },

    async updateEncuesta(){
      const res = await axios.put(window.axios.defaults.baseURL+'api/encuestas/'+ this.id, { 
        'name': this.name,
        'description': this.description,
        'state': this.state,
        'preguntas': this.preguntas
      });

      window.location.href = window.axios.defaults.baseURL+'admin/encuestas';
    },
    
  },
  created() {
    this.getEncuesta();
  },
};
</script>