<template>
  <div>
    <div class="card-body pl-60 pr-60" style="min-height: 240px;" >
      <div align="center">
        <h3>{{ pregunta }}</h3>  
      </div>
      
      <div class="pt-30">
        <div class="pt-2" v-for="o in opciones">
          <div class="form-check">

            <label class="form-check-label">
              <input class="form-check-input" type="radio" :value="o.id" v-model="picked">
              {{ o.opcion }}
            </label>
          </div>
        </div> 
      </div>
    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <button @click="exit()" v-if="this.current_index==0" class="btn">Salir</button>
        <button @click="back()" v-if="this.current_index!=0"  class="btn">Volver</button>
        <button class="btn" :disabled="!picked" v-if="this.current_index!=this.last" @click="nextPreg()">Siguiente</button>
        <button class="btn" :disabled="!picked" v-if="this.current_index==this.last" @click="send()">Enviar</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_pregunta:null,
      last:null,
      pregunta:'',
      opciones:[],
      picked:null
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

    respuestas:{
      get(){
        return this.$store.state.respuestas;
      }
    }
  },

  methods: {
    getPreguntas(index){
      this.picked = this.respuestas[index].id_option_selected;
      this.id_pregunta = this.respuestas[index].id;
      this.pregunta = this.respuestas[index].pregunta;
      this.opciones = this.respuestas[index].options;
    },

    lastPregunta(){
      let i = this.index_resp;
      this.last = i[i.length - 1];
    },

    nextPreg(){
      this.respuestas[this.current_index].id_option_selected = this.picked;
      this.opciones.forEach((e)=>{
        if(e.id==this.picked){
          this.respuestas[this.current_index].value_option_selected = e.valor;
        }
      })

      if(this.current_index!=this.last){
        this.current_index++;
        this.getPreguntas(this.current_index);
      }

    },

    send(){
      this.respuestas[this.current_index].id_option_selected = this.picked;
      this.opciones.forEach((e)=>{
        if(e.id==this.picked){
          this.respuestas[this.current_index].value_option_selected = e.valor;
        }
      })

      this.status_test = 'finish';
    },

    back(){
      this.respuestas[this.current_index].id_option_selected = this.picked;
      this.opciones.forEach((e)=>{
        if(e.id==this.picked){
          this.respuestas[this.current_index].value_option_selected = e.valor;
        }
      })
      if(this.current_index!=0){
        this.current_index--;
        this.getPreguntas(this.current_index);
      }
    },

    exit(){
       window.location.href =  './';
    },
  },
  created() {
    this.getPreguntas(this.current_index);
    this.lastPregunta();
  },
};
</script>

<style scoped>

</style>