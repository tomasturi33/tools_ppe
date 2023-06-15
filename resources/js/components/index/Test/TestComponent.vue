<template>
  <div class="card">
    <div class="card-header">
      {{ this.name }}
    </div>

    <init-test-component v-if="status_test=='init'" />
    <data-required-test-component v-if="status_test=='data_required'" :carreras="this.carreras" />
    <respuesta-test-component v-if="status_test=='process'" />
    <resultado-test-component v-if="status_test=='finish'" />
    <tips-test-component v-if="status_test=='tips'" />

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: ['pregs', 'datos_requeridos', 'preguntas', 'tips', 'carreras'],
  data() {
    return {
      id:null,
      agree: false,
      picked:null
    };
  },

  computed: {
    name:{
      get(){
        return this.$store.state.name_test;
      },
      set(payload){
        this.$store.commit('setNameTest', payload)
      }
    },

    description:{
      get(){
        return this.$store.state.description_test;
      },
      set(payload){
        this.$store.commit('setDescriptionTest', payload)
      }
    },
    
    status_test:{
      get(){
        return this.$store.state.status_test;
      },
      set(payload){
        this.$store.commit('setStartTest', payload)
      }
    },

    data_required:{
      get(){
        return this.$store.state.data_required;
      },
      set(payload){
        this.$store.commit('setDataRequiredTest', payload)
      }
    },
    
    respuestas:{
      get(){
        return this.$store.state.respuestas;
      },
      set(payload){
        this.$store.commit('setRespuestas', payload)
      }
    },

    slug:{
      get(){
        return this.$store.state.slug;
      },
      set(payload){
        this.$store.commit('setSlug', payload)
      }
    },

    resp1:{
      get(){
        return this.$store.state.resp1;
      },
      set(payload){
        this.$store.commit('setRespuesta1', payload)
      }
    },

    resp2:{
      get(){
        return this.$store.state.resp2;
      },
      set(payload){
        this.$store.commit('setRespuesta2', payload)
      }
    },

    resp3:{
      get(){
        return this.$store.state.resp3;
      },
      set(payload){
        this.$store.commit('setRespuesta3', payload)
      }
    },

    resp4:{
      get(){
        return this.$store.state.resp4;
      },
      set(payload){
        this.$store.commit('setRespuesta4', payload)
      }
    },

    tips_state:{
      get(){
        return this.$store.state.tips;
      },
      set(payload){
        this.$store.commit('setTips', payload)
      }
    }
  },

  methods: {
    setData(){
      let encuesta = JSON.parse(this.pregs);
      this.id = encuesta.id;
      this.name = encuesta.name;
      this.description = encuesta.description;
      this.slug = encuesta.slug;
      this.resp1 = encuesta.respuesta_1;
      this.resp2 = encuesta.respuesta_2;
      this.resp3 = encuesta.respuesta_3;
      this.resp4 = encuesta.respuesta_4;

      this.data_required = JSON.parse(this.datos_requeridos);

      this.preguntas = JSON.parse(this.preguntas);

      for(let i=0; i<this.preguntas.length; i++){
        let resp_aux=[];
        resp_aux= {
            'id': this.preguntas[i].id,
            'pregunta':this.preguntas[i].pregunta,
            'id_option_selected':null,
            'value_option_selected':null,
            'options':this.preguntas[i].options
          };
        this.respuestas = resp_aux;
      }

      this.$store.state.tips = JSON.parse(this.tips);
    }
  },
  created() {
    this.setData();
  },
  mounted(){
  }
};
</script>

<style scoped>

</style>