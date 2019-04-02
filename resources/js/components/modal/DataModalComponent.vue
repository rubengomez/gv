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
            <div v-if="this.id==null">
                <div class="form-group" v-for="(variable, key,index) in objeto">
                    <h6 class="text-left">{{ titulos[index] }}</h6>
                    <input type="text" class="form-control" placeholder="Ingresa un nuevo valor" v-model="objeto[key]">
                </div>
            </div>
            <div v-else>
                <div class="form-group" v-for="(variable, key,index) in ObjectEdit">
                    <h6 class="text-left">{{ titulos[index] }}</h6>
                    <input type="text" class="form-control" placeholder="Ingresa un nuevo valor" v-model="ObjectEdit[key]">
                </div>
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
            ObjectEdit:null,
            titulos:this.titles,
            id: null,
            objeto: Object.assign({}, this.objetoProps)
        }
    },
    props: {
        nameModal: String,
        titles:Array,
        objetoProps: Object
    },
    created(){
        EvenBus.$on('object-edit', data => {
            this.ObjectEdit = Object.assign({}, data);
            delete this.ObjectEdit.created_at;
            delete this.ObjectEdit.updated_at;
            delete this.ObjectEdit.id;
            this.id=data.id;
        })
    },
    methods:{
        saveModal: function(){
            if (this.id==null) {
                EvenBus.$emit('object-added',this.objeto)
            }else {
                this.ObjectEdit.id = this.id
                EvenBus.$emit('object-edited',this.ObjectEdit)
            }
            this.clearModal();
            $('#dataModal').modal('hide');
        },
        clearModal(){
            this.ObjectEdit=null;
            this.id=null;
            this.objeto= Object.assign({}, this.objetoProps);
        }
    }
}
</script>
