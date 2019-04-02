<template>
    <vuetable ref="vuetable"
        detail-row-component="my-detail-row"
        :apiMode= 'false'
        :fields="this.fields"
        :data="this.data"
        >
        <template slot="actions" slot-scope="props">
            <div class="custom-actions">
              <button class="btn btn-outline-info"
                @click="onAction(props.rowData, props.rowIndex)"
                data-toggle="modal" data-target="#dataModal">
                <i class="fas fa-pencil-alt"></i>
              </button>
              <button class="btn btn-outline-danger"
                @click="onDelete(props.rowData.id,props.rowIndex)">
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
        </template>
    </vuetable>
</template>

<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import DetailRow from './../DetailRow'
import swal from 'sweetalert';

    Vue.component('my-detail-row', DetailRow)

import EvenBus from '../../even-bus'
export default {
    props: {
        data: Array,
        fields: Array,
        route: String
    },
    components: {
        Vuetable
    },
    methods: {
        onAction (data, index) {
          this.indexActive = index
          EvenBus.$emit('object-edit',data)
        },
        onDelete(id,index){
            swal({
              title: "Esta seguro de eliminarlo?",
              text: "Al eliminar este elemento puede afectar al comportamiento del portal",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                  axios.delete(this.route+'/'+ id)
                  .then(function(res){
                      console.log(res);
                      EvenBus.$emit('object-del',index)
                  })
                  .catch(function(err){
                      console.log(err);
                  });
                swal("Poof! Elemento eliminado!", {
                  icon: "success",
                });
              }
            });
        }
    }
}
</script>
