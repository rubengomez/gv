<template>
    <div class="container" id="addVehicle">
    <div class="row">
      <div class="col">
        <div id="desc_form">
          <div class="container">
            <div class="row justify-content-between">
              <h3 class="text-left">
                <i class="fas fa-car"></i>
                Nuevo Ingreso Vehiculo
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Columna1/3-->
    <div iv class="row lpad">
      <div class="col-md-4">
        <label for="nom">Nombre</label>
        <input type="text"
        class="form-control"
        id="nom"
        placeholder="Nombre"
        v-model="unombre">
      </div>
      </div>
      <div class="col-md-4">
        <label for="tel">Telefono</label>
        <input
          type="text"
          class="form-control"
          id="tel"
          placeholder="Telefono"
          v-model="utel"
        >
        </div>
        <div class="col-md-4">
        <label for="pass">Password</label>
        <input
          type="text"
          class="form-control"
          id="pass"
          placeholder="Password"
          v-model="upass"
        >
        <div class="col-md-4">
        <label for="cpass">Confirme Password</label>
        <input
          type="text"
          class="form-control"
          id="cpass"
          placeholder="Password"
          v-model="ucpass"
        >
    </div>
</template>
<script>
export default {
    data(){
        return{
            unombre:'',
            ucorreo:'',
            upass:'',
            ucpass:'',
        }
    }
}
</script>
