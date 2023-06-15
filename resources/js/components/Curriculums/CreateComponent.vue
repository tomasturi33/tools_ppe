<template>
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row pt-4">
                  <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                        <label>Nombre: </label>
                        <input class="form-control" type="text" v-model="name" autocomplete="off">
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
                <button class="btn btn-primary" @click="save()" >Guardar</button>
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
  components: {
    PreguntasComponent
  },
  data() {
    return {
      name:'',
      description:'',
      state:0,
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
    async save() {
      let encuesta = {
        'name':         this.name,
        'description':  this.description,
        'state':        this.state?1:0,
        'preguntas':    this.preguntas
      };
      console.log(encuesta);
      const res = await axios.post(window.axios.defaults.baseURL+'api/encuestas', encuesta);
      console.log(res);
      window.location.href = window.axios.defaults.baseURL+'admin/encuestas';
    },

    back(){
       window.location.href =  window.axios.defaults.baseURL+'admin/encuestas'
    },
    
  },
  created() {

  },
};
</script>