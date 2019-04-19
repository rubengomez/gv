<template>
  <div class="container" id="showVehicle">
    <div class="row">
      <div class="col">
        <div id="desc_form">
          <div class="container">
            <div class="row justify-content-between">
              <h3 class="text-left">
                <i class="fas fa-car"></i>
                Detalle Vehiculo
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Columna1/3-->
    <div iv class="row lpad">
      <div class="col-md-4">
        <label for="empresa">Empresa</label>
        <input type="text" class="form-control" v-model="vehicle.empresa" disabled>
      </div>
      <div class="col-md-4">
        <label for="brand">Marca</label>
        <input type="text" class="form-control" id="brand" v-model="vehicle.brand" disabled>
      </div>
      <div class="col-md-4">
        <label for="model">Modelo</label>
        <input type="text" class="form-control" id="model" v-model="vehicle.model" disabled>
      </div>
    </div>
    <div iv class="row lpad">
      <div class="col-md-4">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" v-model="vehicle.series" disabled>
      </div>
      <div class="col-md-4">
        <label for="placa2">Placa</label>
        <input type="text" class="form-control" id="placa2" v-model="vehicle.plate_number" disabled>
      </div>
      <div class="col-md-4">
        <label for="tcirc">T.Circulacion</label>
        <input
          type="text"
          class="form-control"
          id="tcirc"
          v-model="vehicle.folio_circulation"
          disabled
        >
      </div>
    </div>
    <div iv class="row lpad">
      <div class="col-md">
        <label for="capacidad">Capacidad</label>
        <input type="text" class="form-control" id="capacidad" v-model="vehicle.capacity" disabled>
      </div>
      <div class="col-md">
        <label for="motor1">Motor</label>
        <select class="form-control" id="motor1" v-model="vehicle.engine_id" disabled>
          <option v-for="moto in smotor" v-bind:value="moto.id">{{ moto.name }}</option>
        </select>
      </div>
      <div class="col-md">
        <label for="ejes">Ejes</label>
        <select class="form-control" id="ejes" v-model="vehicle.axes_id" disabled>
          <option v-for="eje in sejes" v-bind:value="eje.id">{{ eje.name }}</option>
        </select>
      </div>
      <div class="col-md">
        <label for="serv">Servicios</label>
        <select class="form-control" id="serv" v-model="vehicle.service_id" disabled>
          <option v-for="serv in sserv" v-bind:value="serv.id">{{ serv.name }}</option>
        </select>
      </div>
    </div>
    <div iv class="row justify-content-center">
      <div class="col-md-4">
        <a class="btn btn-guarda btn-outline-primary btn-lg">Guardar</a>
      </div>
    </div>
  </div>
</template>

<script>
import EvenBus from "../../even-bus";
export default {
  data() {
    return {
      vehicle: {
        empresa: "emp",
        brand: "",
        model: "",
        series: "",
        plate_number: "",
        folio_circulation: "",
        capacity: "",
        engine_id: "",
        axes_id: "",
        service_id: ""
      },

      smotor: [],
      sejes: [],
      sserv: []
    };
  },
  props: {
    data: Array
  },
  created() {
    this.vehicle = Object.assign({}, this.data);

    axios
      .get("/axes")
      .then(res => (this.sejes = res.data))
      .catch(function(err) {
        console.log(err);
      });
    axios
      .get("/services")
      .then(res => (this.sserv = res.data))
      .catch(function(err) {
        console.log(err);
      });
    axios
      .get("/engines")
      .then(res => (this.smotor = res.data))
      .catch(function(err) {
        console.log(err);
      });
  }
};
</script>

<style scope>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.btn-guarda {
  padding: 5%;
  margin-top: 5%;
}
.lpad {
  padding-top: 4%;
  text-align: left;
  padding-left: 4%;
}
</style>