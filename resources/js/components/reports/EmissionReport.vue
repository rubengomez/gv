<template>
    <div class="container">
        <div class="row justify-content-between bottom">
            <div class="col-8">
                <h3 class="text-left">
                    <i class="fas fa-file-invoice"></i> Reporte Semestral Emisiones
                </h3>
            </div>
            <div class="col-4">
                <select class="form-control" id="ejes" v-model="mes">
                    <option disabled value="">Seleccione semestre</option>
                    <option v-for="eje in mesesOpciones" v-bind:value="eje.id">{{ eje.name }}</option>
                </select>
            </div>
        </div>
        <div id="tabs" class="container">
            <div class="tabs">
                <a v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]">Federal 1</a>
                <a v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]">Federal 2</a>
                <a v-on:click="activetab=3" v-bind:class="[ activetab === 3 ? 'active' : '' ]">Desgloce</a>
            </div>

            <div class="content">
                <div v-if="activetab === 1" class="tabcontent">
                    <div class="row">
                        <div class="col-sm-10 right">
                            <h6>1. DOTACIONES QUE RECIBIMOS EN EL PRIMER PERIODO DEL 2018</h6>
                        </div>
                        <div class="col-sm-2">
                            <label class="result">15</label>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Enero</th>
                                <th>Febrero</th>
                                <th>Marzo</th>
                                <th>Abril</th>
                                <th>Mayo</th>
                                <th>Junio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-10 right">
                            <h6>2. CERTIFICADOS SOBRANTES DEL PRIMER PERIODO DEL 2018</h6>
                        </div>
                        <div class="col-sm-2">
                            <label class="result">15</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 right">
                            <h6>3. CERTIFICADOS SOBRANTES DE LA ULTIMA DOTACION DEL SEGUNDO PERIODO DEL 2017</h6>
                        </div>
                        <div class="col-sm-2">
                            <label class="result">15</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 right">
                            <h6>4. CERTIFICADOS CANCELADOS</h6>
                        </div>
                        <div class="col-sm-2">
                            <label class="result">15</label>
                        </div>
                    </div>
                    <div class="rows">
                        <textarea name="name" class="form-control bottom" rows="2" cols="80"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 right">
                            <h6>5. TOTAL DE CERTIFICADOS UTILIZADOS</h6>
                        </div>
                        <div class="col-sm-2">
                            <label class="result">15</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 right">
                            <h6>6. TOTAL DE CERTIFICADOS EN EL PRIMER PERIODO DEL 2018</h6>
                        </div>
                        <div class="col-sm-2">
                            <label class="result">15</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                    <div>
                        <button class="btn btn-primary top-marin" type="button">Exportar</button>
                    </div>
                </div>
                </div>
                <div v-if="activetab === 2" class="tabcontent">
                    Cargando...
                </div>
                <div v-if="activetab === 3" class="tabcontent">
                    desgloce...
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            activetab: 1,
            mes:'',
            mesesOpciones:[
                {name:'Enero - Junio 2019',id:'5'},
                {name:'Julio - Diciembre 2018',id:'4'},
                {name:'Enero - Junio 2018',id:'3'},
                {name:'Julio - Diciembre 2017',id:'2'},
                {name:'Enero - Junio 2017',id:'1'}
            ],
        }
    },
    props: {
        data: Array
    },
    created(){

    },
    mounted() {
        /*axios.get('flujoEtapas')
        .then(res => (this.etapas = res.data))
        .catch(function(err){console.log(err);});

        axios.get('etapas')
        .then(res => (this.internas = res.data))
        .catch(function(err){console.log(err);});
*/
    },
    methods:{
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
  width: 100%;
  height: 450px;
  overflow: scroll;
}
.right{
    text-align: left;
}
.result{
    width: 75%;
    border-bottom: 2px solid #6c757d;
}
</style>
