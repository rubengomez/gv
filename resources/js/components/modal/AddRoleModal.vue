<template>
<div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" v-if="this.id==null">Agregar Rol</h5>
        <h5 class="modal-title" id="exampleModalLabel" v-else>Editar Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click='clearModal'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveRoles">
	        <div class="form-group">
			    <label>Nombre</label>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del nuevo rol" v-model="name">
		  	</div>
		  	<div class="form-group">
			    <label>Descripcion</label>
			    <input type="text" class="form-control" placeholder="Ingresa la descripcion del nuevo rol" v-model="description">
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
            name:null,
            description:null,
            id:null
        }
    },
    created(){
        EvenBus.$on('role-edit', data => {
            this.name=data.name;
            this.description=data.description;
            this.id=data.id;
        })
    },
    methods:{
        saveRoles: function(){
            if (this.id==null) {
                axios.post('http://127.0.0.1:8000/roles',{
                    name: this.name,
                    description: this.description
                })
                .then(function(res){
                    console.log(res);
                    $('#addPokemon').modal('hide')
                    EvenBus.$emit('role-added',res.data.role)
                })
                .catch(function(err){
                    console.log(err);
                });
            }else {
                axios.put('http://127.0.0.1:8000/roles/'+this.id,{
                    name: this.name,
                    description: this.description
                })
                .then(function(res){
                    console.log(res);
                    $('#addPokemon').modal('hide')
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
