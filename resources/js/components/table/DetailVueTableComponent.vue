<template>
    <div class="ui container">
  <vuetable ref="vuetable"
  detail-row-component="my-detail-row"
    :apiMode= 'false'
    :fields="this.fields"
    :data="this.data"
    pagination-path=""
    :per-page="5"
    @vuetable:pagination-data="onPaginationData"
  >

  <template slot="actions" slot-scope="props">
          <div class="custom-actions">
            <button class="btn btn-outline-info"
              @click="onShow(props.rowData.id)">
              <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-outline-info"
              @click="onEdit(props.rowData.id)">
              <i class="fas fa-pencil-alt"></i>
            </button>
            <button class="btn btn-outline-danger"
              @click="onAction('delete-item', props.rowData, props.rowIndex)">
              <i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </template>
    </vuetable>
    <vuetable-pagination  ref="pagination"
      @vuetable-pagination:change-page="onChangePage"
    ></vuetable-pagination>
    </div>
</template>

<script>
import Vuetable from 'vuetable-2/src/components/Vuetable'
import DetailRow from './../DetailRow'
import VuetablePagination from './Pagination'

    Vue.component('my-detail-row', DetailRow)

export default {
    props: {
        data: Array,
        fields: Array,
        route: String
    },
  components: {
  Vuetable,DetailRow,VuetablePagination
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

        location.href=this.route+"/"+identificador;
        console.log(identificador)

    },
    onEdit(identificador){
        location.href=this.route+"/"+identificador+"/edit";
        console.log(identificado/r)

    },
    onPaginationData (paginationData) {
      this.$refs.pagination.setPaginationData(paginationData)
    },
    onChangePage (page) {
      this.$refs.vuetable.changePage(page)
    }



}
}
</script>
