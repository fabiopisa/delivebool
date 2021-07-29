<template>
  <div class="card flex-row mb-3">
    <h1>{{id}}</h1>
    <h1>nome ristorante {{nome_ristorante}}</h1>
    <h2>cognome ristorante{{indirizzo_ristorante}}</h2>
    <h5>proprietario {{nome_proprietario}} {{cognome_proprietario}}</h5>
    <router-link class="btn btn-primary" :to="{name: 'menuRestaurant', params:{id}}" >Menù</router-link>
  </div>
</template>

<script>
export default {
  name: 'CardRestaurant',
  props:['id','nome_ristorante','indirizzo_ristorante','nome_proprietario','cognome_proprietario'],
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