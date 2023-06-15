<template>
  <div>
    <div>
      <div class="card-body pl-40 pr-40" style="min-height: 240px;">
        
        <div class="row">
          <div class="col-md-12 col-sm-12">
            {{ description }}
          </div>
        </div>
            
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-check pt-40">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" v-model="agree">
                Comprendo que se trata solo de un simulador y acepto realizarlo.
              </label>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <button @click="back()" class="btn">Volver</button>
        <button class="btn" :disabled="!validate" @click="startTest()">Empezar</button>
      </div>
    </div>
  </div>

</template>

<script>
export default {

  data() {
    return {
      id:null,
      agree: false,
    };
  },

  computed: {
    name:{
      get(){
        return this.$store.state.name_test;
      },
      set (payload) {
        this.$store.commit('setNameTest', payload)
      }
    },

    description:{
      get(){
        return this.$store.state.description_test;
      },
      set (payload) {
        this.$store.commit('setDescriptionTest', payload)
      }
    },

    index_resp:{
      get(){
        return this.$store.state.index_resp;
      },
      set (payload) {
        this.$store.commit('setIndexRespuestas', payload)
      }
    },

    current_index:{
      get(){
        return this.$store.state.current_index;
      },
      set (payload) {
        this.$store.commit('setCurrentIndexRespuestas', payload)
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
    
    respuestas:{
      get(){
        return this.$store.state.respuestas;
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

    validate:function(){
      if(this.agree){
        return true;
      }
      return false;
    }

  },

  methods: {
    startTest(){
      Object.keys(this.respuestas).forEach((e)=>{
        this.index_resp = e;
      })
      
      //Si hay algun dato requerido, paso al componente data_required
      //de lo contrario voy directamente a las preguntas
      if( this.data_required.username ||
          this.data_required.lastname ||
          this.data_required.dni ||
          this.data_required.email ||
          this.data_required.phone ||
          this.data_required.institution ||
          this.data_required.career ||
          this.data_required.student
          ){
        this.status_test = 'data_required';
      }else{
        this.status_test = 'process';
      }
      this.current_index = 0;
    },

    back(){
      window.location.href =  '../simulador-virtual';
    },
  },
  created() {

  },
};
</script>

<style scoped>

</style>