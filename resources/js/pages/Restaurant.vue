<template>
  <section class="container">
    <h1 class="mb-5">Restaurant/Menu li trovi qui</h1>
    <section
        v-for="restaurant in restaurants"
        :key="restaurant.id"
        class="mb-5">

        <h1>BENVENUTO NEL {{restaurant.name}}</h1>
        <h2>{{restaurant.address}}</h2>
        <h2>{{restaurant.nome}}</h2>
        <h2>{{restaurant.surname}}</h2>

             <router-link class="btn btn-primary" :to="{name:'meals',params:{id:restaurant.id}}">
                Visualizza Menù
            </router-link>

        <hr>
    </section>
    <router-link class="btn btn-secondary" :to="{name:'home'}">
      Return Home
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'as'}" >
      Return Advanced Search
    </router-link>
  </section>
</template>

<script>

import axios from 'axios';
export default {
  name:'Restaurant',
  data(){


      return{
        restaurants:[],
        /* api_key: restaurant.id */


      }
  },
   methods:{
     getRestaurants(){
         axios.get('http://127.0.0.1:8000/api/restaurants')
            .then( res => {
                this.restaurants=res.data;
                console.log(res.data);
            })
            .catch( err => {
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
