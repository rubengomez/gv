<template>
  <div id="table">
    <div class="ui container">
      <my-vuetable></my-vuetable>
    </div>
  </div>
</template>

<script>
import MyVuetable from './MyVuetable'

export default {
  name: 'app',
  components: {
    MyVuetable
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
