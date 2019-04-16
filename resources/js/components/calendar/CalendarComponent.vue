<template>
    <div class="container">
        <vue-cal :time="false" hide-weekends></vue-cal>
    </div>
</template>

<script>
import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'
export default {
    components: { VueCal },
data(){
    return{
        activetab: 1,
        checked:false,
        checked2:false,
        selected:'',
        message:'',
        message2:''
    }
}
}
</script>

<style>
.vuecal__menu, .vuecal__cell-events-count {background-color: #6cb2eb;}
.vuecal__menu li {border-bottom-color: #fff;color: #fff;}
.vuecal__menu li.active {background-color: rgba(255, 255, 255, 0.15);}
.vuecal__title {background-color: #dbf5fe;}
.vuecal__cell.today, .vuecal__cell.current {background-color: rgba(240, 240, 255, 0.4);}
.vuecal:not(.vuecal--day-view) .vuecal__cell.selected {background-color: rgba(235, 255, 245, 0.4);}
.vuecal__cell.selected:before {border-color: rgba(66, 185, 131, 0.5);}
</style>
