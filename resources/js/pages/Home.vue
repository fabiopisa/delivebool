<template>
  <div class="container">
    <h1>Questa è la home</h1>
    <router-link class="btn btn-primary" :to="{name:'as'}" >
      Advanced Search
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'as'}" >
      Resturant/Menu
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'account'}" >
      Sing-in or Login
    </router-link>
  </div>
</template>

<script>
export default {
  name:'Home'
}
</script>

<style>

</style>