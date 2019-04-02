<template>
  <vuetable ref="vuetable"
  detail-row-component="my-detail-row"
    :apiMode= 'false'
    :fields="this.fields"
    :data="this.data"

  > 
  
  <template slot="actions" slot-scope="props">
          <div class="custom-actions">
            <button href="/vehicle" class="btn btn-outline-info"
              @click="onShow(props.rowData.id)">
              <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-outline-info"
              @click="onAction('edit-item', props.rowData, props.rowIndex)">
              <i class="fas fa-pencil-alt"></i> 
            </button>
            <button class="btn btn-outline-danger"
              @click="onAction('delete-item', props.rowData, props.rowIndex)">
              <i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </template>
    </vuetable>
</template>

<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import DetailRow from './../DetailRow'

    Vue.component('my-detail-row', DetailRow)

export default {
    props: {
        data: Array,
        fields: Array

    },
  components: {
  Vuetable,DetailRow
},
methods: {
    onAction (action, data, index) {
      console.log('slot action: ' + action, data.name, index)
    },
    onCellClicked (data, field, event) {
        console.log('cellClicked: ', field.name)
        this.$refs.vuetable.toggleDetailRow(data.id)
    },
    onShow(identificador){

        location.href="/vehicles/"+identificador;
        console.log(identificador)
        
    }
  


}
}
</script>
