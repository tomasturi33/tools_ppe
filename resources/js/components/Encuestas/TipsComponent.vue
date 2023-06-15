<template>
  <div>
    <table class="table table-hover table-sm">
      <thead>
        <tr>
          <th scope="col" style="width: 5%;" class="text-center">#</th>
          <th scope="col" style="width: 75%;" class="text-center">Tip</th>
          <th scope="col" style="width: 20%;" class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="t in tips">
          <th scope="row" class="text-center">{{ t.id_tip}}</th>
          <td>{{ t.tip }}</td>
          <td class="text-center">
            <div>
              <button @click="editTip(t.id_tip)" type="button" class="btn btn-circle btn-warning">
                <i class="fa fa-pen"></i>
              </button>
              <button @click="deleteTip(t.id_tip)" type="button" class="btn btn-circle btn-danger">
                <i class="fa fa-trash"></i>
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>


        <!-- Button to Open the Modal -->
    <div class="col-md-12 col-xs-12 pt-4" align="center">
      <button @click="nuevo()"  type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-plus"></i></button>
      <p class="pt-4">
        <label>AGREGAR TIP</label>
      </p>
    </div>

    

    <!-- The Modal -->
    <div class="modal fade" id="addTip">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Nuevo Tip</h4>
            <button @click="cerrarModal()" type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12 col-xs-12 my-4">
                <label for="nombre">Tip:</label>
                <input v-model="tip" type="text" class="form-control" autocomplete="off">
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-between">
            <button @click="cerrarModal()" type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
            <button :disabled="tip==''" @click="addTip()" type="button" class="btn btn-primary">
              Agregar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="editTip">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Editar tip</h4>
            <button @click="cerrarModal()" type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12 col-xs-12 my-4">
                <label for="nombre">Tip:</label>
                <input v-model="tip" type="text" class="form-control" id="nombre" autocomplete="off">
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-between">
            <button @click="cerrarModal()" type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
            <button :disabled="tip==''" @click="updateTip(id_tip)" type="button" class="btn btn-primary">
              Actualizar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['id_pregunta'],
  data() {
    return {
      id_tip:null,
      tip:'',
      valor_opcion:[],
    };
  },

  computed: {
    tips:{
      get(){
        return this.$store.state.tips;
      }
    }
  },

  methods: {
    nuevo(){
      this.tip='';
      $('#addTip').modal('show');
    },

    addTip(){
      let tip = {
        'id_tip':this.$store.state.id_tip,
        'tip': this.tip
      };
      this.$store.commit('addTip', tip);
      this.cerrarModal();
    },

    editTip(id){
      let p = this.findId(id);
      this.id_tip=p.id_tip;
      this.tip = p.tip;
      $('#editTip').modal('show');
    },

    updateTip(id){
      for (var i = 0; i < this.tips.length; i++) {
        if (this.tips[i].id_tip == id) {
          this.tips[i].tip=this.tip;
        }
      }
      this.cerrarModal();
    },

    deleteTip(id){
      if(confirm("¿Seguro que deseas eliminar?")){
        this.$store.commit('deleteTip', id);
      }
    },

    findId(id) {
      for (var i = 0; i < this.tips.length; i++) {
        if (this.tips[i].id_tip == id) {
          return(this.tips[i]);
        }
      }
    },

    cerrarModal(){
      $('#addTip').modal('hide');
      $('#editTip').modal('hide');
      this.tip='';
    }
  },
  created() {

  },
};
</script>

<style scoped>
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

</style>