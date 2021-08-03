<template>


  <div class="app">
  <Header/>
    
    <router-view></router-view>

  <Footer/>
  
  </div>

</template>

<script>
import Header from './components/Home/Header.vue'
import Footer from './components/Home/Footer.vue'
export default {
 name:'App',
 components: {
    Header,
    Footer
  },
}
</script>

<style lang="scss">
  @import '../sass/frontoffice/_global.scss';

</style>