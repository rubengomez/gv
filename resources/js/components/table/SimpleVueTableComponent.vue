<template>
    <vuetable ref="vuetable"
        detail-row-component="my-detail-row"
        :apiMode= 'false'
        :fields="this.fields"
        :data="this.data"
        >
        <template slot="actions" scope="props">
            <div class="custom-actions">
              <button class="btn btn-outline-info"
                @click="onAction(props.rowData, props.rowIndex)"
                data-toggle="modal" data-target="#addPokemon">
                <i class="icon ion-md-create"></i>
              </button>
              <button class="btn btn-outline-danger"
                @click="onDelete(props.rowData.id,props.rowIndex)">
                <i class="icon ion-md-trash"></i>
              </button>
            </div>
        </template>
    </vuetable>
</template>

<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import DetailRow from './../DetailRow'

    Vue.component('my-detail-row', DetailRow)

import EvenBus from '../../even-bus'
export default {
    props: {
        data: Array,
        fields: Array
    },
    components: {
        Vuetable
    },
    methods: {
        onAction (data, index) {
          console.log('slot action: ' + data.name,data.description, index)
          this.indexActive = index
          EvenBus.$emit('role-edit',data)
        },
        onDelete(id,index){
            axios.delete('http://127.0.0.1:8000/roles/'+ id)
            .then(function(res){
                console.log(res);
                EvenBus.$emit('role-del',index)
            })
            .catch(function(err){
                console.log(err);
            });

        }
    }
}
</script>
