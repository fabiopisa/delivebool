<template>
  <section class="container">
    <h1>Restaurant/Menu li trovi qui</h1>
    <router-link class="btn btn-secondary" :to="{name:'home'}">
      Return Home
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'as'}" >
      Return Advanced Search
    </router-link>
  </section>
</template>

<script>
export default {
  name:'Restaurant'
}
</script>

<style>

</style>