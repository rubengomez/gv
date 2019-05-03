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
  <template slot="vehicles" slot-scope="props">
      <div class="custom-actions">
          <button class="btn btn-outline-info"
              @click="showVehicles(props.rowData.id)">
              <i class="fas fa-car"></i>
          </button>
      </div>
  </template>
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
              @click="onDelete(props.rowData.id,props.rowIndex)">
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
import EvenBus from "../../even-bus";
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
    showVehicles(identificador){

        location.href="/showVehicles/"+identificador;
        EvenBus.$emit('show-vehicles',identificador)
        console.log(identificador)

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
