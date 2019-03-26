<template>
    <vuetable ref="vuetable"
        detail-row-component="my-detail-row"
        @vuetable:cell-clicked="onCellClicked"
        :apiMode= 'false'
        :fields="this.fields"
        :data="this.data"
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
    props: {
        data: Array,
        fields: Array
    },
    components: {
        Vuetable
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
