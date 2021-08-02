<template>
  <div class="card flex-row mb-3">
    <h1>nome ristorante {{nome_ristorante}}</h1>
    <h2>indirizzo ristorante{{indirizzo_ristorante}}</h2>
    <router-link class="btn btn-primary" :to="{name: 'menuRestaurant', params:{id}}" >Menù</router-link>
  </div>
  

</template>

<script>
export default {
  name: 'CardRestaurant',
  props:['nome_ristorante','indirizzo_ristorante'],
  methods:{
    showId(){
      console.log(this.id);
    }
  },
  created(){
    this.showId();
  }
}
</script>

<style>

</style>