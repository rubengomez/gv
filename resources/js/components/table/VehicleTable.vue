<template>
  <div id="table">
      <!--add-role-modal></add-role-modal-->
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-4">
                  <h3 class="text-left">
                      <i class="fas fa-car"></i>
                      Vehiculos</h3>
              </div>
              <div class="col-4">
                  <a href="/vehicles/create" class="btn btn-outline-primary btn-sm" style="margin-bottom: 1%;">Agregar +</a>
                 </div>
          </div>
      </div>
    <div class="ui container">
      <detail-vue-table
          :fields="[
            {name: 'brand', title: 'Marca',dataClass:'text-left'},
            {name:'model', title: 'Modelo',dataClass:'text-left'},
            {name: 'series', title: 'N° Serie',dataClass:'text-left'},
            {name:'plate_number', title: 'Placa',dataClass:'text-left'},
            {name: 'folio_circulation', title: 'T.Circulacion',dataClass:'text-left'},
            {name:'capacity', title: 'Capacidad',dataClass:'text-left'},
            {name: 'axes_id', title: 'Ejes',dataClass:'text-left'},
            {name: '__slot:actions', title: 'Acciones',dataClass:'text-left'}]"
          :data="this.data"
          :route="'/vehicles'">
      </detail-vue-table>
    </div>
  </div>
</template>

<script>
import EvenBus from '../../even-bus'
import DetailVueTable from './DetailVueTableComponent'

export default {
  name: 'app',
  props: {
      data: Array,
  },
  components: {
    DetailVueTable
},
/*created(){
    EvenBus.$on('role-added', data => {
        this.data.push(data)
    })
    EvenBus.$on('role-del', index => {
        this.data.splice(index, 1);
    })
    EvenBus.$on('role-update', data => {
        var indexActive = 0;
        this.data.forEach(function(element,index) {
            if (element.id == data.id) {
                indexActive = index;
            }
        });
        this.data[indexActive]=data;
        this.data.push()
    })
},*/
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
