<template>
  <div>
    <!-- Button to Open the Modal -->
    <div class="col-md-12 col-xs-12" align="right">
      <button @click="nuevo()" type="button" class="btn btn-primary my-4"><i class="fa fa-plus"> </i> Agregar encuesta</button>
    </div>

    <table class="table table-hover pt-4">
      <thead class="thead-ligth">
        <tr>
          <th style="width: 5%;" class="text-center">#</th>
          <th style="width: 40%;">Nombre</th>
          <th style="width: 20%;" class="text-center">Respuestas</th>
          <th style="width: 20%;" class="text-center">Estado</th>
          <th style="width: 15%;" class="text-center">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="e in encuestas" :key="e.id">
          <th scope="row" class="text-center">{{ e.id }}</th>
          <td>{{ e.name }}</td>
          <td class="text-center">{{ e.cantidad_respuestas }}</td>
          <td class="text-center">{{ e.state==1?'PUBLICADA':'NO PUBLICADA' }}</td>
          <td>
            <div class="row">
              <div class="col-sm-3">
                  <button class="btn btn-sm btn-primary" @click="viewResponse(e.id)"><i class="fa fa-list"></i></button>
              </div>
              <div class="col-sm-3">
                  <button class="btn btn-sm btn-info" @click="show(e.id)"><i class="fa fa-eye"></i></button>
              </div>
              <div class="col-sm-3">
                  <button class="btn btn-sm btn-warning" @click="edit(e.id)"><i class="fa fa-pen"></i></button>
              </div>
              <div class="col-sm-3">
                <button class="btn btn-sm btn-danger" @click="deleteEncuesta(e.id)"><i class="fa fa-trash"></i></button>
              </div>
          </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props:['data'],
  data() {
    return {
      encuestas:[],
    };
  },
  methods: {
    getEncuestas(){
      this.encuestas = this.data;
      console.log(this.encuestas)
    },
    
    async deleteEncuesta(id) {

     if(confirm("¿Seguro que deseas eliminar?")){
        await axios.delete(window.location.href+'/'+id)
          .then(resp => {
            console.log(resp);

            let encuestas_aux=[];
            encuestas_aux = this.encuestas.filter((element)=>{
                    return element.id !== id;
                  })
            this.encuestas = encuestas_aux;
          })
          .catch(error => {
            console.log(error);
          })
      }
    },

    nuevo(){
      window.location.href = './encuestas/create';
    },

    viewResponse(id){
       window.location.href = './encuestas/'+id+'/respuestas';
    },

    show(id){
       window.location.href = './encuestas/'+id;
    },

    edit(id){
      window.location.href = './encuestas/'+id+'/edit';
    }
  },
  created() {
    this.getEncuestas();
  },
};
</script>