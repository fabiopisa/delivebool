<template>
<div class="body" :style="{'background-image':'url(../img/bg_up.svg)'}">
      <div class="container">

    <Header />

    <h1>Questa è la home</h1>

    <Footer />

  </div>
</div>
</template>

<script>
import Header from '../components/Home/Header.vue';
import Footer from '../components/Home/Footer.vue';
export default {
  name:'Home',
  components:{
      Header,
      Footer
  }
}
</script>

<style lang='scss'>
body{
    width: 100%;
    height: 100vh;
}



</style>
