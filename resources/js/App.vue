<template>


  <div class="app">
  <Header/>
    
    <router-view></router-view>
  </div>

</template>

<script>
import Header from './components/Home/Header.vue'
export default {
 name:'App',
 components: {
    Header
  },
}
</script>

<style lang="scss">
  @import '../sass/frontoffice/_global.scss';

</style>