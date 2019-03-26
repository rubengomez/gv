<template>
<div class="modal fade" id="dataModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" v-if="this.id==null">Agregar {{ this.nameModal }}</h5>
        <h5 class="modal-title" id="exampleModalLabel" v-else>Editar {{ this.nameModal }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click='clearModal'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveModal">
	        <div class="form-group">
			    <h6 class="text-left">Nombre</h6>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del nuevo rol" v-model="name">
		  	</div>
		  	<div class="form-group">
			    <h6 class="text-left">Descripcion</h6>
			    <input type="text" class="form-control" placeholder="Ingresa la descripcion del nuevo rol" v-model="description">
		  	</div>
            <div class="form-group" v-for="variable in variables">
			    <h6 class="text-left">{{ variable.title }}</h6>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del nuevo rol" v-model="variable.value">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Guardar</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import EvenBus from '../../even-bus'
export default {
    data(){
        return{
            n1:null,
            variables:this.fields,
            identificador:null
        }
    },
    props: {
        nameModal: String,
        name: String,
        description: String,
        id: Number,
        route: String,
        fields:Array
    },
    created(){
        EvenBus.$on('role-edit', data => {
            this.name=data.name;
            this.description=data.description;
            this.id=data.id;
            this.identificador=data.id;
            console.log(data);
            this.variables.forEach(function (elemento, indice, array) {
                console.log('------BANDERA-----');
    console.log(elemento, indice);
});
        })
    },
    methods:{
        saveModal: function(){
            if (this.id==null) {
                axios.post(this.route,{
                    name: this.name,
                    description: this.description
                })
                .then(function(res){
                    console.log(res);
                    $('#dataModal').modal('hide')
                    EvenBus.$emit('role-added',res.data.role)
                })
                .catch(function(err){
                    console.log(err);
                });
            }else {
                axios.put(this.route+'/'+this.id,{
                    name: this.name,
                    description: this.description
                })
                .then(function(res){
                    console.log(res);
                    $('#dataModal').modal('hide')
                    EvenBus.$emit('role-update',res.data.role)
                })
                .catch(function(err){
                    console.log(err);
                });
            }
            this.clearModal();
        },
        clearModal(){
            this.name=null;
            this.description=null;
            this.id=null;
        }
    }
}
</script>
