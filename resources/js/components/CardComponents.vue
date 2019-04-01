<template>
    <div class="row">
        <div class="col-sm" v-for="service in services">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">{{ service.key }}</h1>
                    <p>{{ service.name }}</p>
                </div>
            </div>

        </div>

    </div>

</template>

<script>
import EvenBus from '../even-bus'
export default {
    data(){
        return{
            services:[]
        }
    },
    created(){
        EvenBus.$on('axes-added', data => {
            this.services.push(data)
        })
    },
    mounted() {
        axios.get('http://127.0.0.1:8000/axes').then(response => (this.services = response.data))
    }
}
</script>
