export default {
	state: {
      id_pregunta:1,
      id_opcion:1,
      preguntas: [],
      id_tip:1,
      tips:[],

      //Datos requeridos test
      data_required:[],

      username_test:0,
      lastname_test:0,
      dni_test:0,
      email_test:0,
      phone_test:0,
      institution_test:0,
      university_test:0,
      career_test:0,
      student_test:0,

      respondents_name:'',
      respondents_lastname: '',
      respondents_dni: '',
      respondents_email: '',
      respondents_phone: '',
      respondents_institution: '',
      respondents_university: '',
      respondents_career: '',
      respondents_student: 'estudiante',

      status_test:'init',

      count_resp: null,
      index_resp: [],
      current_index:null,
      name_test:null,
      description_test: null,
      respuestas:[],
      slug:null,
      resp1:null,
      resp2:null,
      resp3:null,
      resp4:null,
	},

   mutations: {
      categories(state,data) {
       return state.category = data
      },

      addPregunta(state, payload){
       this.state.preguntas.push(payload);
       this.state.id_pregunta++;
      },

      deletePregunta(state, payload){
      this.state.preguntas = this.state.preguntas.filter(function(item) {
        return item.id_pregunta != payload;
      });
      },

      addOpcion(state, payload){
       this.state.preguntas.forEach((element)=>{
          if(element.id_pregunta==payload.id_pregunta){
             element.opciones.push(payload.opcion);
             this.state.id_opcion++;
           }
       })
      },

      deleteOption(state, payload){
       this.state.preguntas.forEach((element)=>{
          if(element.id_pregunta==payload.id_pregunta){
             element.options = element.options.filter(function(item) {
              return item.id_opcion != payload.id_opcion;
            })
          }
       })
      },

      addTip(state, payload){
       this.state.tips.push(payload);
       this.state.id_tip++;
      },

      deleteTip(state, payload){
      this.state.tips = this.state.tips.filter(function(item) {
        return item.id_tip != payload;
      });
      },

      deleteTip(state, payload){
      this.state.tips = this.state.tips.filter(function(item) {
        return item.id_tip != payload;
      });
      },

      //--------------------------------------------------------
      //----------------Test realizado por el usuario-----------
      //--------------------------------------------------------

      setNameTest(state, payload){
       this.state.name_test = payload;
      },

      setDescriptionTest(state, payload){
       this.state.description_test = payload;
      },

      setStartTest(state, payload){
       this.state.status_test = payload;
      },

      setIndexRespuestas(state, payload){
       this.state.index_resp.push(payload);
      },

      setCurrentIndexRespuestas(state, payload){
       this.state.current_index = payload;
      },

      setRespuestas(state, payload){
       this.state.respuestas.push(payload);
      },

      setSlug(state, payload){
       this.state.slug = payload;
      },

      setRespuesta1(state, payload){
       this.state.resp1 = payload;
      },

      setRespuesta2(state, payload){
       this.state.resp2 = payload;
      },

      setRespuesta3(state, payload){
       this.state.resp3 = payload;
      },

      setRespuesta4(state, payload){
       this.state.resp4 = payload;
      },

      //--------------------------------------------------------
      //--------------------------------------------------------
      setDataRequiredTest(state, payload){
         this.state.data_required = payload;
      },

      setNameRespondentsTest(state, payload){
         this.state.respondents_name = payload;
      },

      setLastnameRespondentsTest(state, payload){
         this.state.respondents_lastname = payload;
      },

      setDniRespondentsTest(state, payload){
         this.state.respondents_dni = payload;
      },

      setEmailRespondentsTest(state, payload){
         this.state.respondents_email = payload;
      },

      setPhoneRespondentsTest(state, payload){
         this.state.respondents_phone = payload;
      },

      setInstitutionRespondentsTest(state, payload){
         this.state.respondents_institution = payload;
      },

      
      setUniversityRespondentsTest(state, payload){
         this.state.respondents_university = payload;
      },

      setCareerRespondentsTest(state, payload){
         this.state.respondents_career = payload;
      },

      setStudentRespondentsTest(state, payload){
         this.state.respondents_student = payload;
      }


	}
}