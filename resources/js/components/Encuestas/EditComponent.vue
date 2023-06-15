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
      </div>
    </div>

    <h3>Datos requeridos:</h3>
    <div class="card">
      <div class="card-body">
        <div class="row">

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="username" type="checkbox" class="custom-control-input" id="customSwitchUserName">
                <label class="custom-control-label" for="customSwitchUserName">Nombre</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="lastname" type="checkbox" class="custom-control-input" id="customSwitchLastName">
                <label class="custom-control-label" for="customSwitchLastName">Apellido</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="dni" type="checkbox" class="custom-control-input" id="customSwitchDNI">
                <label class="custom-control-label" for="customSwitchDNI">DNI</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="email" type="checkbox" class="custom-control-input" id="customSwitchEmail">
                <label class="custom-control-label" for="customSwitchEmail">Correo electrónico</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="phone" type="checkbox" class="custom-control-input" id="customSwitchPhone">
                <label class="custom-control-label" for="customSwitchPhone">Teléfono/Celular</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="institution" type="checkbox" class="custom-control-input" id="customSwitchInstitution">
                <label class="custom-control-label" for="customSwitchInstitution">Institución/Emprensa</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="career" type="checkbox" class="custom-control-input" id="customSwitchCareer">
                <label class="custom-control-label" for="customSwitchCareer">Carrera</label>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input v-model="student" type="checkbox" class="custom-control-input" id="customSwitchStudent">
                <label class="custom-control-label" for="customSwitchStudent">Estudiante o graduado</label>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <h3>Preguntas:</h3>
    <div class="card">
      <div class="card-body">
        <PreguntasComponent />
      </div>
    </div>

    <h3>Respuestas:</h3>
    <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <label>Respuesta 1 [0-25%]: </label>
                  <textarea class="form-control" rows="3" maxlength="500" v-model="resp_1"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <label>Respuesta 2 [26-50%]: </label>
                  <textarea class="form-control" rows="3" maxlength="500" v-model="resp_2"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <label>Respuesta 3 [51-75%]: </label>
                  <textarea class="form-control" rows="3" maxlength="500" v-model="resp_3"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <label>Respuesta 4 [76-100%]: </label>
                  <textarea class="form-control" rows="3" maxlength="500" v-model="resp_4"></textarea>
                </div>
            </div>
        </div>
      </div>
    </div>

    <h3>Tips:</h3>
    <div class="card">
      <div class="card-body">
        <tips-preguntas-component />
      </div>
    </div>

    <div class="d-flex justify-content-between pt-4 pb-4">
      <button class="btn btn-danger" :disabled="send" @click="back()">Volver</button>
      <button class="btn btn-primary" :disabled="send" @click="updateEncuesta()">Actualizar</button>
    </div>

  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</template>

<script>
import PreguntasComponent from './PreguntasComponent';

export default {
  props: ['id', 'encuesta', 'datos_requeridos', 'preguntas', 'tips'],
  components: {
    PreguntasComponent
  },
  data() {
    return {
      name:'',
      description:'',
      state:null,
      
      username: 0,
      lastname: 0,
      dni: 0,
      email: 0,
      phone: 0,
      institution: 0,
      career: 0,
      student:0,

      resp_1:'',
      resp_2:'',
      resp_3:'',
      resp_4:'',

      send:false
    }
  },
  computed: {
    preguntas_state:{
      get(){
        return this.$store.state.preguntas;
      }
    },
    tips_state:{
      get(){
        return this.$store.state.tips;
      }
    }
  },

  methods: {
    getEncuesta(){
      this.name         = this.encuesta.name;
      this.description  = this.encuesta.description;
      this.state        = this.encuesta.state;

      this.username     = this.datos_requeridos.username;
      this.lastname     = this.datos_requeridos.lastname;
      this.dni          = this.datos_requeridos.dni;
      this.email        = this.datos_requeridos.email;
      this.phone        = this.datos_requeridos.phone;
      this.institution  = this.datos_requeridos.institution;
      this.career       = this.datos_requeridos.career;
      this.student       = this.datos_requeridos.student;
      
      this.resp_1       = this.encuesta.respuesta_1;
      this.resp_2       = this.encuesta.respuesta_2;
      this.resp_3       = this.encuesta.respuesta_3;
      this.resp_4       = this.encuesta.respuesta_4;

      this.preguntas.forEach((element)=>{
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

      this.tips.forEach((element)=>{
        let tip = {
          'id_tip': this.$store.state.id_tip,
          'tip': element.tip,
        }; 
        this.$store.commit('addTip', tip);
      })
    },

    back(){
       window.location.href = '../';
    },

    async updateEncuesta(){
      this.send=true;
      await axios.put('../'+ this.id, { 
        'name':         this.name,
        'description':  this.description,
        'state':        this.state,
        'username':     this.username?1:0,
        'lastname':     this.lastname?1:0,
        'dni':          this.dni?1:0,
        'email':        this.email?1:0,
        'phone':        this.phone?1:0,
        'institution':  this.institution?1:0,
        'career':       this.career?1:0,
        'student':      this.student?1:0,
        'preguntas':    this.preguntas_state,
        'respuesta_1':  this.resp_1,
        'respuesta_2':  this.resp_2,
        'respuesta_3':  this.resp_3,
        'respuesta_4':  this.resp_4, 
        'tips':         this.tips_state, 
      }).then((result) => {
        window.location.href = '../';
      });
    },
    
  },
  created() {
    this.getEncuesta();
  },
};
</script>