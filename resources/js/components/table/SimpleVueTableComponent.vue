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
        fields: Array,
        route: String
    },
    components: {
        Vuetable
    },
    methods: {
        onAction (data, index) {
          console.log('slot action: ' + data.name,data.description, index)
          this.indexActive = index
          EvenBus.$emit('object-edit',data)
        },
        onDelete(id,index){
            axios.delete(this.route+'/'+ id)
            .then(function(res){
                console.log(res);
                EvenBus.$emit('object-del',index)
            })
            .catch(function(err){
                console.log(err);
            });

        }
    }
}
</script>
