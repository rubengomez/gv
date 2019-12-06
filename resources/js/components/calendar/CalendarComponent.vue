<template>
    <div class="container">
        <vue-cal style="height: 500px"
            default-view="month"
            :locale="'es'"
            :time-from="8 * 60"
            :time-to="19 * 60"
            :disable-views="['years']"
            :events="events"
        ></vue-cal>
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
        message2:'',
        events: [
    {
      start: '2019-05-14 14:00',
      end: '2019-05-14 15:00',
      title: 'Verificacion1.2',
      content: '<i class="v-icon material-icons">shopping_cart</i>',
      class: 'leisure'
    },
    {
      start: '2019-05-14 14:00',
      end: '2019-05-14 15:00',
      title: 'Verificacion1.2',
      content: '<i class="v-icon material-icons">shopping_cart</i>',
      class: 'leisure'
    },
    {
      start: '2019-05-15 16:00',
      end: '2019-05-15 16:30',
      title: 'Verifiacion 2',
      content: '<i class="v-icon material-icons">golf_course</i>',
      class: 'sport'
    },
    {
      start: '2019-05-17 12:00',
      end: '2019-05-17 14:00',
      title: 'Verificacion 3',
      content: '<i class="v-icon material-icons">Carro</i>',
      class: 'Big'
    }
  ]
    }
}
}
</script>

<style>
.vuecal__menu, .vuecal__cell-events-count {background-color: #6cb2eb;}
.vuecal__cell--has-events {background-color: #fffacd;}
.vuecal__menu li {border-bottom-color: #fff;color: #fff;}
.vuecal__menu li.active {background-color: rgba(255, 255, 255, 0.15);}
.vuecal__title {background-color: #dbf5fe;}
.vuecal__cell.today, .vuecal__cell.current {background-color: rgba(240, 240, 255, 0.4);}
.vuecal:not(.vuecal--day-view) .vuecal__cell.selected {background-color: rgba(235, 255, 245, 0.4);}
.vuecal__cell.selected:before {border-color: rgba(66, 185, 131, 0.5);}
</style>
