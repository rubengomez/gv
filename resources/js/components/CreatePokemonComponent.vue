<template>
<div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Pokemon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveAxes">
	        <div class="form-group">
			    <label>Pokemon</label>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del pokemon" v-model="key">
		  	</div>
		  	<div class="form-group">
			    <label>Picture</label>
			    <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="name">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Save</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import EvenBus from '../even-bus'
export default {
    data(){
        return{
            name:null,
            key:null
        }
    },
    methods:{
        saveAxes: function(){
            axios.post('http://127.0.0.1:8000/axes',{
                key: this.key,
                name: this.name
            })
            .then(function(res){
                console.log(res);
                $('#addPokemon').modal('hide')
                EvenBus.$emit('axes-added',res.data.axes)
            })
            .catch(function(err){
                console.log(err);
            });
        }
    }
}
</script>
