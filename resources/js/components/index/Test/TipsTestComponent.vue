<template>
  <div>
    <div class="card-body pl-40 pr-40" style="min-height: 240px;">

      <div v-show="!show" class="pt-30" align="center">
        <div class="loader"></div>
      </div>
      
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div v-show="show">
            <h5>Tips para mejorar tu entrevista:</h5>
            <div class="pt-1 pb-1" v-for="t in tips_state">
              <i style="font-size: 0.7rem;" class="fa fa-check"></i>
              {{ t.tip }}
            </div>  
          </div>
        </div>

      </div>
    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <button @click="back()" :disabled="!show" class="btn btn-block">Volver</button>
      </div>
    </div>

</div>
</template>

<script>
export default {

  data() {
    return {
      show:true,
    };
  },

  computed: {
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
    back(){
      //window.location.href =  '/simulador-virtual';
      window.location.href =  '../simulador-virtual';
    },
  },
  created() {
     
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