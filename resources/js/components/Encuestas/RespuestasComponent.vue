<template>
  <div>
    <table class="table table-hover pt-4">
      <thead class="thead-ligth">
        <tr>
          <th v-if="data_required.username">Nombre</th>
          <th v-if="data_required.lastname">Apellido</th>
          <th v-if="data_required.dni">DNI</th>
          <th v-if="data_required.email">E-Mail</th>
          <th v-if="data_required.phone">Teléfono</th>
          <th v-if="data_required.institution">Institución/Empresa</th>
          <th v-if="data_required.career">Carrera</th>
          <th v-if="data_required.student">Estudiante/graduado</th>
          <th class="text-center">Resultado</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="e in encuestas" :key="e.id">
          <td v-if="data_required.username">{{ e.name }}</td>
          <td v-if="data_required.lastname">{{ e.lastname }}</td>
          <td v-if="data_required.dni">{{ e.dni }}</td>
          <td v-if="data_required.email">{{ e.email }}</td>
          <td v-if="data_required.phone">{{ e.phone }}</td>
          <td v-if="data_required.institution">{{ e.institution }}</td>
          <td v-if="data_required.career">{{ e.career }}</td>
          <td v-if="data_required.student">{{ e.student }}</td>
          <td class="text-center"><b>{{ e.result }}%</b></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props:['data', 'data_required'],
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