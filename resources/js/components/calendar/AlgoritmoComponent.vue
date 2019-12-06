<template>
  <div class="container">
    <!-- Columna1/3-->
    <div iv class="row lpad">
        <div class="col-md-2">
            <label for="brand">Placa</label>
            <input type="text" class="form-control" id="brand" v-model="entrada">
        </div>
        <div class="col-md-2">
            <label for="brand">Tipo</label>
            <input type="text" class="form-control" id="brand" v-model="tipoPlaca" disabled>
        </div>
        <div class="col-md-2">
            <label for="brand">No Tomado</label>
            <input type="text" class="form-control" id="brand" v-model="noTomado" disabled>
        </div>
        <div class="col-md">
            <label for="brand">Validacion</label>
            <input type="text" class="form-control" id="brand" v-model="validacion" disabled>
        </div>
    </div>


    <div iv class="row justify-content-center">
      <div class="col-md-4">
        <button  @click="save()" class="btn btn-outline-primary btn-md btn-guardar">Evaluar</button>

      </div>
    </div>
  </div>
</template>

<script>
import swal from 'sweetalert';
export default {
  data() {
    return {
      entrada:'',
      noTomado:'',
      tipoPlaca:'',
      validacion:''
    };
  },
  computed:{
      arreglo(){
          return Array.from(this.entrada);
      }
  },
  props: {
  },
  created() {

  },
  methods:{
      save(){
          //console.log(Array.from('foo'));
          //this.arreglo = Array.from(this.entrada);
          //for (var variable in this.arreglo) {
              if (!isNaN(this.arreglo[0]) && !isNaN(this.arreglo[1]) && !isNaN(this.arreglo[2]) && !isNaN(this.arreglo[3])) {
                  console.log('numero');
                  this.noTomado = this.arreglo[3];
                  this.tipoPlaca ='Federal'
              }else if (!isNaN(this.arreglo[0]) && !isNaN(this.arreglo[1]) && !isNaN(this.arreglo[2])) {
                  console.log('numero');
                  this.noTomado = this.arreglo[2];
                  this.tipoPlaca ='Federal'
              }
              else {
                  for (var variable in this.arreglo) {
                      console.log(this.arreglo[variable]);
                      if (!isNaN(this.arreglo[variable])) {
                          console.log('numero');
                           this.noTomado = this.arreglo[variable];
                           this.tipoPlaca ='Estatal'
                      }else{
                          console.log('letra');
                      }
                  }
              }
              if (this.noTomado == 5 || this.noTomado == 6) {
                  this.validacion = 'Enero,Febrero,Marzo,Abril';
              }else if (this.noTomado == 7 || this.noTomado == 8) {
                  this.validacion = 'Marzo,Abril,Mayo,Junio';
              }else if (this.noTomado == 3 || this.noTomado == 4) {
                this.validacion = 'Mayo,Junio,Julio,Agosto';
            }else if (this.noTomado == 1 || this.noTomado == 2) {
                  this.validacion = 'Julio,Agosto,Septiembre,Octubre';
              }else if (this.noTomado == 9 || this.noTomado == 0) {
                  this.validacion = 'Septiembre,Octubre,Noviembre,Diciembre';
              }
          //}
      }
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
.btn-guardar {

  margin-top: 5%;
}
.lpad {
  padding-top: 4%;
  text-align: left;
  padding-left: 4%;
}
</style>
