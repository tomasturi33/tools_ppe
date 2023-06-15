<template>
  <div>
    <div class="card-body" style="min-height: 240px;">
      <div class="mt-70 mb-70">

        <div class="row justify-content-center" v-if="data_required.username">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="text" class="form-control" v-model="respondents_name" placeholder="Nombre">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.lastname">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="text" class="form-control" v-model="respondents_lastname" placeholder="Apellido">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.dni">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="number" class="form-control" v-model="respondents_dni" placeholder="DNI">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.email">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="email" class="form-control" v-model="respondents_email" placeholder="Correo electrónico">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.phone">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="number" class="form-control" v-model="respondents_phone" placeholder="Teléfono/Celular">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.institution">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="text" class="form-control" v-model="respondents_institution" placeholder="Institución/Empresa">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.career">
          <div class="col-md-6 col-sm-12 pt-2">
            <select class="form-control" v-model="respondents_university">
              <option selected value="UNL">Universidad Nacional del Litoral</option>
              <option value="Otra">Otra</option>
            </select>
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.career && respondents_university=='UNL'">
          <div class="col-md-6 col-sm-12 pt-2">
            <select class="form-control" v-model="respondents_career" placeholder="Carrera">
              <option v-for="carrera in carreras_unl" :value="carrera.nombre">{{ carrera.nombre }}</option>
            </select>
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.career && respondents_university=='Otra'">
          <div class="col-md-6 col-sm-12 pt-2">
            <input type="text" class="form-control" v-model="respondents_career" placeholder="Carrera">
          </div>
        </div>

        <div class="row justify-content-center" v-if="data_required.student">
          <div class="col-md-6 col-sm-12 pt-2">
            <select class="form-control" v-model="respondents_student">
              <option selected value="estudiante">Estudiante</option>
              <option value="graduado">Graduado</option>
            </select>
          </div>
        </div>
      </div>
        

    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <button @click="back()" class="btn">Salir</button>
        <button class="btn" :disabled="!validate" @click="startTest()">Siguiente</button>
      </div>
    </div>

</div>
</template>

<script>
export default {
  props: ['carreras'],
  data() {
    return {
      error:false,

      error_name: true,
      error_lastname: true,
      error_dni: true,
      error_email: true,
      error_phone: true,
      error_institution: true,

      carreras_unl:null,

      id:null,
      data_complete: false,
    };
  },

  computed: {
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

    data_required:{
      get(){
        return this.$store.state.data_required;
      },
      set(payload){
        this.$store.commit('setDataRequiredTest', payload)
      }
    },

    //-----------Datos requeridos--------------//
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

    validate:function(){

      if( !this.data_required.username || 
          this.data_required.username && 
          this.respondents_name.trim().length > 0){
        this.error_name=false;
      }else{
        this.error_name=true;
      }


      if( !this.data_required.lastname ||
          this.data_required.lastname && 
          this.respondents_lastname.trim().length > 0){
        this.error_lastname=false;
      }else{
        this.error_lastname=true;
      }


      if( !this.data_required.dni || 
          this.data_required.dni && 
          this.respondents_dni.trim().length > 0){
        this.error_dni=false;
      }else{
        this.error_dni=true;
      }


      if( !this.data_required.email || 
          this.data_required.email && 
          this.respondents_email.trim().length > 0){
        this.error_email=false;
      }else{
        this.error_email=true;
      }


      if( !this.data_required.phone || 
          this.data_required.phone && 
          this.respondents_phone.trim().length > 0){
        this.error_phone=false;
      }else{
        this.error_phone=true;
      }


      if( !this.data_required.institution || 
        this.data_required.institution && 
        this.respondents_institution.trim().length > 0){
        this.error_institution=false;
      }else{
        this.error_institution=true;
      }

      if( !this.error_name && 
          !this.error_lastname && 
          !this.error_dni &&
          !this.error_email &&
          !this.error_phone &&
          !this.error_institution){
        return true;
      }
      return false;
    }
  },

  methods: {
    startTest(){
      this.status_test = 'process';
      this.current_index = 0;
    },

    cheakUniversityRequired(){
      if(this.data_required.career){
        this.respondents_university='UNL';
      }else{
        this.respondents_university='';
      }
    },

    cheakCareerRequired(){
      if(this.data_required.career){
        this.respondents_career = this.carreras_unl[0].nombre;
      }else{
        this.respondents_career='';
      }
    },

    cheakStudentRequired(){
      if(this.data_required.student){
        this.respondents_student='estudiante';
      }else{
        this.respondents_student='';
      }
    },

    back(){
      window.location.href =  '../simulador-virtual';
    },
  },
  watch: {
    respondents_university: function () {
      if(this.respondents_university=='Otra'){
        this.respondents_career='';
      }else{
        this.respondents_career = this.carreras_unl[0].nombre;
      }
    }
  },
  mounted(){
    this.cheakUniversityRequired();
    this.cheakCareerRequired();
    this.cheakStudentRequired();
  },

  beforeMount() {
    this.carreras_unl = JSON.parse(this.carreras);
  }
};
</script>

<style scoped>

</style>