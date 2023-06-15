<template>
  <div>
    <div class="card-body pl-40 pr-40" style="min-height: 240px;">

      <div v-show="!show" class="pt-30" align="center">
        <div class="loader"></div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div v-show="show" align="center">
            <div class="pt-4 pb-1">
              <h3 v-if="data_required.name">{{ respondents_name }}, tu resultado es:</h3>
              <h3 v-if="!data_required.name">Tu resultado es:</h3>
            </div>
            <div>
              <h3 style="font-size: 84px!important;font-weight: 200!important">{{ resultado }}%</h3>
            </div>      
          </div>

          <div v-show="show" align="center">
            <div class="pt-4 pb-1">
              <p>
                {{ respuesta }}
              </p>
            </div>      
          </div>          
        </div>
      </div>
    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <button @click="next()" :disabled="!show" class="btn btn-block">Siguiente</button>
      </div>
    </div>

</div>
</template>

<script>
export default {

  data() {
    return {
      respuesta:'',
      show:false,
      resultado:0
    };
  },

  computed: {
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

    //-----------Datos requeridos--------------//
    data_required:{
      get(){
        return this.$store.state.data_required;
      },
      set(payload){
        this.$store.commit('setDataRequiredTest', payload)
      }
    },

    respondents_name:{
      get(){
        return this.$store.state.respondents_name;
      },
      set(payload){
        this.$store.commit('setNameRespondentsTest', payload)
      }
    },

    respondents_lastname:{
      get(){
        return this.$store.state.respondents_lastname;
      },
      set(payload){
        this.$store.commit('setLastnameRespondentsTest', payload)
      }
    },

    respondents_dni:{
      get(){
        return this.$store.state.respondents_dni;
      },
      set(payload){
        this.$store.commit('setDniRespondentsTest', payload)
      }
    },

    respondents_email:{
      get(){
        return this.$store.state.respondents_email;
      },
      set(payload){
        this.$store.commit('setEmailRespondentsTest', payload)
      }
    },

    respondents_phone:{
      get(){
        return this.$store.state.respondents_phone;
      },
      set(payload){
        this.$store.commit('setPhoneRespondentsTest', payload)
      }
    },

    respondents_institution:{
      get(){
        return this.$store.state.respondents_institution;
      },
      set(payload){
        this.$store.commit('setInstitutionRespondentsTest', payload)
      }
    },

    respondents_university:{
      get(){
        return this.$store.state.respondents_university;
      },
      set(payload){
        this.$store.commit('setUniversityRespondentsTest', payload)
      }
    },

    respondents_career:{
      get(){
        return this.$store.state.respondents_career;
      },
      set(payload){
        this.$store.commit('setCareerRespondentsTest', payload)
      }
    },

    respondents_student:{
      get(){
        return this.$store.state.respondents_student;
      },
      set(payload){
        this.$store.commit('setStudentRespondentsTest', payload)
      }
    },
    //-----------Fin Datos requeridos--------------//
  },

  methods: {
    init(){
      let time =(Math.random() * (2000)) 
      setTimeout(()=>{ this.generateResult(); }, time); 
    },

    async sendResult(){
      let data = {
        name:         this.respondents_name, 
        lastname:     this.respondents_lastname,
        dni:          this.respondents_dni,
        email:        this.respondents_email,
        phone:        this.respondents_phone,
        institution:  this.respondents_institution,
        university:   this.respondents_university,
        career:       this.respondents_career,
        student:      this.respondents_student,
        result:       this.resultado
      }
      await axios.post('../simulador-virtual/'+this.slug,{ data })
        .then(resp => {
          console.log(resp);
        });
    },

    generateResult(){
      let count = 0;
      let aux = 0;
      this.respuestas.forEach((e)=>{
        aux += e.value_option_selected;
        count++;
      })
      this.resultado= Number((aux/count).toFixed(0));

      if(this.resultado<=25){
        this.respuesta = this.resp1;
      }

      if(this.resultado>=26 && this.resultado<=50){
        this.respuesta = this.resp2;
      }

      if(this.resultado>=51 && this.resultado<=75){
        this.respuesta = this.resp3;
      }

      if(this.resultado>=76){
        this.respuesta = this.resp4;
      }

      this.sendResult();
      this.show=true;
    },

    next(){
      this.status_test = 'tips';
    },

    back(){
      //window.location.href =  '/simulador-virtual';
      window.location.href =  '../simulador-virtual';
    },
  },
  created() {
     this.init();
  },
};
</script>

<style scoped>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>