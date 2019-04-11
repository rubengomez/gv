<template>
  <div id="table">
      <data-modal
        :nameModal="'Rol'"
        :titles="['Nombre','Descripcion']"
        :objetoProps="this.objeto[0]"
        >
    </data-modal>

      <div class="container">
          <div class="row justify-content-between">
              <div class="col-4">
              </div>
              <div class="col-4">
                  <flash-message transitionIn="animated swing" class="myCustomClass"></flash-message>
              </div>
          </div>
          <div class="row justify-content-between">
              <div class="col-4">
                  <h3 class="text-left">
                      <i class="icon ion-md-people"></i>
                      Credito</h3>
              </div>
              <div class="col-4">
                  <a href="/services/create" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#dataModal">Agregar +</a>
              </div>
          </div>
      </div>
    <div class="ui container">
      <simple-vue-table
          :fields="[
            {name:'name', title: 'Nombre del Rol'},
            {name: 'description', title: 'Descripcion'},
            {name: '__slot:actions', title: 'Acciones'}]"
          :data="this.data"
          :route="'/roles'">
      </simple-vue-table>
    </div>
  </div>
</template>

<script>
import EvenBus from '../../even-bus'
import SimpleVueTable from './SimpleVueTableComponent'
import VueFlashMessage from 'vue-flash-message/src';
Vue.use(VueFlashMessage);
export default {
  name: 'app',
  data(){
      return{
          objeto:[
              {name:null,description:null}
          ]
      }
  },
  props: {
      data: Array,
  },
  components: {
    SimpleVueTable
},
created(){
    EvenBus.$on('object-added', data => {
        axios.post('/roles',{
            name: data.name,
            description: data.description
        })
        .then(function(res){
            console.log(res);
        })
        .catch(function(err){
            console.log(err);
        });
        this.data.push(data)
        this.flash('Rol creado exitosamente', 'success', {
  timeout: 4000,
  });
    })
    EvenBus.$on('object-del', index => {
        this.data.splice(index, 1);
    })
    EvenBus.$on('object-edited', data => {
        console.log(data);
        axios.put('/roles/'+data.id,{
            name: data.name,
            description: data.description
        })
        .then(function(res){
            console.log(res);
        })
        .catch(function(err){
            console.log(err);
        });
        var indexActive = 0;
        this.data.forEach(function(element,index) {
            if (element.id == data.id) {
                indexActive = index;
            }
        });
        this.data[indexActive]=data;
        this.data.push()
    })
},
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
