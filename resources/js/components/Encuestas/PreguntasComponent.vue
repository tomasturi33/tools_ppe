<template>
  <div>
    <ul class="list-group">
      <li class="list-group-item" v-for="n in preguntas">
        <ul>
          
          <div class="row justify-content-between">
            <div class="p-4">
              <label>{{ n.pregunta }}</label>              
            </div>

            <div class="p-4">
              <button @click="addOpcion(n.id_pregunta)" type="button" class="btn btn-circle btn-primary">
                <i class="fa fa-plus"></i>
              </button>
              <button @click="editPregunta(n.id_pregunta)" type="button" class="btn btn-circle btn-warning">
                <i class="fa fa-pen"></i>
              </button>
              <button @click="deletePregunta(n.id_pregunta)" type="button" class="btn btn-circle btn-danger">
                <i class="fa fa-trash"></i>
              </button>
            </div>
          </div>

          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col" style="width: 5%;" class="text-center">#</th>
                <th scope="col" style="width: 55%;" class="text-center">Opción</th>
                <th scope="col" style="width: 20%;" class="text-center">Puntaje</th>
                <th scope="col" style="width: 20%;" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="q in n.opciones">
                <th scope="row" class="text-center">{{ q.id_opcion}}</th>
                <td>{{ q.opcion }}</td>
                <td class="text-center">{{ q.valor }}%</td>
                <td class="text-center">
                  <div>
                    <button @click="editOpcion(n.id_pregunta, q.id_opcion)" type="button" class="btn btn-circle btn-warning">
                      <i class="fa fa-pen"></i>
                    </button>
                    <button @click="deleteOpcion(n.id_pregunta, q.id_opcion)" type="button" class="btn btn-circle btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        </ul>
      </li>
    </ul>

    <!-- Button to Open the Modal -->
    <div class="col-md-12 col-xs-12 pt-4" align="center">
      <button @click="nuevo()"  type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-plus"></i></button>
      <p class="pt-4">
        <label>AGREGAR PREGUNTA</label>
      </p>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="addPregunta">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Nueva pregunta</h4>
            <button @click="cerrarModal()" type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="my-4">
              <label for="nombre">Pregunta:</label>
              <input v-model="pregunta" v-on:keydown.enter.prevent="addPregunta()" type="text" class="form-control" id="nombre" autocomplete="off">
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-between">
            <button @click="cerrarModal()" type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
            <button :disabled="pregunta==''" @click="addPregunta()" type="button" class="btn btn-primary">
              Agregar
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- The Modal -->
    <div class="modal fade" id="editPregunta">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Editar pregunta</h4>
            <button @click="cerrarModal()" type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="my-4">
              <label for="nombre">Pregunta:</label>
              <input v-model="pregunta" v-on:keydown.enter.prevent="updatePregunta(id_edit)" type="text" class="form-control" id="nombre" autocomplete="off">
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-between">
            <button @click="cerrarModal()" type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
            <button :disabled="pregunta==''" @click="updatePregunta(id_edit)" type="button" class="btn btn-primary">
              Actualizar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="addOpcion">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Agregar opción</h4>
            <button @click="cerrarModal()" type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10 col-xs-12 my-4">
                <label for="nombre">Opción:</label>
                <input v-model="opcion" v-on:keydown.enter.prevent="add(id_pregunta)" type="text" class="form-control" id="nombre" autocomplete="off">
              </div>
              <div class="col-md-2 col-xs-12 my-4">
                <label for="nombre">Valor:</label>
                <select class="form-control" v-model="valor">
                  <option v-for="i in valor_opcion" :value="i.name" class="form-control">{{ i.name }}%</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-between">
            <button @click="cerrarModal()" type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
            <button :disabled="opcion==''" @click="add(id_pregunta)" type="button" class="btn btn-primary">
              Agregar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="editOpcion">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Editar opción</h4>
            <button @click="cerrarModal()" type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10 col-xs-12 my-4">
                <label for="nombre">Opción:</label>
                <input v-model="opcion" v-on:keydown.enter.prevent="updateOpcion(id_pregunta)" type="text" class="form-control" id="nombre" autocomplete="off">
              </div>
              <div class="col-md-2 col-xs-12 my-4">
                <label for="nombre">Valor:</label>
                <select class="form-control" v-model="valor">
                  <option v-for="i in valor_opcion" :value="i.name" class="form-control">{{ i.name }}%</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-between">
            <button @click="cerrarModal()" type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
            <button :disabled="opcion==''" @click="updateOpcion(id_pregunta)" type="button" class="btn btn-primary">
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
  props: ['id'],
  data() {
    return {
      id_pregunta_aux:null,
      id_opcion_aux:null,
      pregunta:'',
      id_edit:null,
      opcion:'',
      valor:0,
      valor_opcion:[],
    };
  },

  computed: {
    preguntas:{
      get(){
        return this.$store.state.preguntas;
      }
    }
  },

  methods: {
    nuevo(){
      this.pregunta='';
      $('#addPregunta').modal('show');
    },

    addPregunta(){
      let preg = {
        'id_pregunta':this.$store.state.id_pregunta,
        'pregunta': this.pregunta,
        'opciones':[]
      }; 
      this.$store.commit('addPregunta', preg);
      this.cerrarModal();
    },

    deletePregunta(id){
      if(confirm("¿Seguro que deseas eliminar?")){
        this.$store.commit('deletePregunta', id);
      }
    },

    addOpcion(id){
      this.id_pregunta_aux = id;
      this.opcion='';
      this.valor=0;
      $('#addOpcion').modal('show');
    },

    add(){
      let op = {
        'id_opcion':this.$store.state.id_opcion, 
        'opcion':this.opcion, 
        'valor':this.valor
      };

      this.$store.commit('addOpcion', {'id_pregunta': this.id_pregunta_aux,'opcion':op} );
      this.opcion='';
      this.valor=0;
      $('#addOpcion').modal('hide');
    },

    editPregunta(id){
      let p = this.findId(id);
      this.id_edit=p.id_pregunta;
      this.pregunta = p.pregunta;
      $('#editPregunta').modal('show');
    },

    updatePregunta(id){
      for (var i = 0; i < this.preguntas.length; i++) {
        if (this.preguntas[i].id_pregunta == id) {
          this.preguntas[i].pregunta=this.pregunta;
        }
      }
      this.cerrarModal();
    },

    editOpcion(id_preg, id_op){
      this.id_pregunta_aux = id_preg;
      this.id_opcion_aux = id_op;
      let p = this.findId(this.id_pregunta_aux);
      for (var i = 0; i < p.opciones.length; i++) {
        if (p.opciones[i].id_opcion == this.id_opcion_aux) {
          this.opcion = p.opciones[i].opcion;
          this.valor = p.opciones[i].valor;
        }
      }
      $('#editOpcion').modal('show');
    },

    updateOpcion(){
      for (var i = 0; i < this.preguntas.length; i++) {
        if (this.preguntas[i].id_pregunta == this.id_pregunta_aux) {
          this.preguntas[i].opciones.forEach((element)=>{
            if(element.id_opcion==this.id_opcion_aux){
              element.opcion=this.opcion;
              element.valor=this.valor;
            }
          })
        }
      }
      this.cerrarModal();
    },

    deleteOpcion(id_preg, id_op){
      if(confirm("¿Seguro que deseas eliminar?")){
        let del = {'id_pregunta':id_preg, 'id_opcion':id_op};
        this.$store.commit('deleteOpcion', del);
      }
    },

    findId(id) {
      for (var i = 0; i < this.preguntas.length; i++) {
        if (this.preguntas[i].id_pregunta == id) {
          return(this.preguntas[i]);
        }
      }
    },

    cerrarModal(){
      $('#addPregunta').modal('hide');
      $('#editPregunta').modal('hide');
      this.pregunta='';

      $('#addOpcion').modal('hide');
      $('#editOpcion').modal('hide');
      this.opcion='';
    },

    cargarValorOpcion(){
      for (var i = 0; i <= 100; i=i+5) {
        this.valor_opcion.push({'id':i,'name':i});
      }
    }
  },
  created() {
    this.cargarValorOpcion();
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