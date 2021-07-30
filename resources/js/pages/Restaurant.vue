<template>
  <section class="container">
    <h1>Restaurant/Menu li trovi qui</h1>
    <CardRestaurant
    v-for="restaurant in restaurants"
    :key ="'r'+restaurant.id"
    :id = "restaurant.restaurant_id"
    :nome_ristorante = "restaurant.nome_ristorante"
    :indirizzo_ristorante = "restaurant.indirizzo_ristorante"
    :nome_proprietario = "restaurant.nome_proprietario"
    :cognome_proprietario = "restaurant.cognome_proprietario"
    />

    <router-link class="btn btn-secondary" :to="{name:'home'}">
      Return Home
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'as'}" >
      Return Advanced Search
    </router-link>
  </section>
</template>

<script>
import axios from 'axios'
import CardRestaurant from '../components/CardRestaurant.vue';

export default {
  name:'Restaurant',
  components:{
    CardRestaurant
  },
  data(){
    return{
      restaurants:[] //array che contiene il risultato della chiamata axios
    }
  },
  methods:{
    getRestaurants(){
      axios.get('http://127.0.0.1:8000/api/restaurants')
        .then(res =>{
            this.restaurants = res.data;
            console.log(this.restaurants); //"qui visualizzo l'array di ristoranti che salvo "
            console.log(res.data); //"qui visualizzo il risultato della chiamata axios"
        })
        .catch(err => {
          console.log(err);
        })
    }
  },
  created(){
    this.getRestaurants();
  }
}
</script>

<style>

</style>