<template>
  <vuetable ref="vuetable"
  detail-row-component="my-detail-row"
  @vuetable:cell-clicked="onCellClicked"
    api-url="https://vuetable.ratiw.net/api/users"
    :fields="['name', 'email', 'birthdate','nickname','gender',{
          name: '__slot:actions',
          title: 'Slot Actions',
          titleClass: 'center aligned',
          dataClass: 'center aligned',
        }]"
  >
  <template slot="actions" scope="props">
          <div class="custom-actions">
            <button class="btn btn-outline-info"
              @click="onAction('view-item', props.rowData, props.rowIndex)">
              <i class="icon ion-md-search"></i>
            </button>
            <button class="btn btn-outline-info"
              @click="onAction('edit-item', props.rowData, props.rowIndex)">
              <i class="icon ion-md-create"></i>
            </button>
            <button class="btn btn-outline-danger"
              @click="onAction('delete-item', props.rowData, props.rowIndex)">
              <i class="icon ion-md-trash"></i>
            </button>
          </div>
        </template>
    </vuetable>
</template>

<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import DetailRow from './DetailRow'

    Vue.component('my-detail-row', DetailRow)

export default {
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
    }
}
}
</script>
