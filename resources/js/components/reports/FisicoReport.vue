<template>
    <div class="container">
        <div class="row justify-content-between bottom">
            <div class="col-8">
                <h3 class="text-left">
                    <i class="fas fa-file-invoice"></i> Reporte Mensual Fisico Mecanica
                </h3>
            </div>
            <div class="col-4">
                <select class="form-control" id="ejes" v-model="mes">
                    <option disabled value="">Seleccione un mes</option>
                    <option v-for="eje in mesesOpciones" v-bind:value="eje.id">{{ eje.name }}</option>
                </select>
            </div>
        </div>
        <div>
            <h5>Verificaciones</h5>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td class="right">Vehiculos Aprobados</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Vehiculos Rechazados</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Otros(cancelados)</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <th class="right">Total</th>
                        <td>Ver</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h5>Verificaciones por clase</h5>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td class="right">T2</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">T3</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">C2</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">C3</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">B2</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">B3</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">A2</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Semi-Remolque o Dolly</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Cancelados</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Rechazados</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <th class="right">Total</th>
                        <td>Ver</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h5>Cancelados</h5>
            <textarea name="name" class="form-control bottom" rows="2" cols="80"></textarea>
        </div>
        <div>
            <h5>Observaciones</h5>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td class="right">VCalcomanias otorgadas en el mes</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Calcomanias sobrantes mes anterior</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Calcomanias existentes en el mes</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td class="right">Días laborados</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <th class="right">Total de calcomanías sobrantes</th>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <th class="right">Total de certificados sobrantes</th>
                        <td>Ver</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            roles:[],
            mes:'',
            mesesOpciones:[
                {name:'Mayo 2019',id:'5'},
                {name:'Abril 2019',id:'4'},
                {name:'Marzo 2019',id:'3'},
                {name:'Febrero 2019',id:'2'},
                {name:'Enero 2019',id:'1'}
            ],
        }
    },
    props: {
    },
    created(){

    },
    metdods:{
        buscar: function(){
        },
    }

}
</script>

<style>
	.top-space{
		margin-top: 20px
	}
    div.ex1 {
  widtd: 100%;
  height: 450px;
  overflow: scroll;
}
.right{
    text-align: left;
}
.bottom{
    margin-bottom: 2%;
}
</style>
