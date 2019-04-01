<template>
  <div id="table">
      <!--add-role-modal></add-role-modal-->
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-4">
                  <h3 class="text-left">
                      <i class="fas fa-times-circle"></i>
                      Rechazos</h3>
              </div>
              <div class="col-4">
                  <a class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#addPokemon">Agregar +</a>
              </div>
          </div>
      </div>
    <div class="ui container">
      <simple-vue-table
          :fields="[
            {name:'name', title: 'Nombre de Rechazo'},
            {name: '__slot:actions', title: 'Acciones'}]"
          :data="this.data">
      </simple-vue-table>
    </div>
  </div>
</template>

<script>
import EvenBus from '../../even-bus'
import SimpleVueTable from './SimpleVueTableComponent'

export default {
  name: 'app',
  props: {
      data: Array,
  },
  components: {
    SimpleVueTable
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
