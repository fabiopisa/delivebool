<template>
  <section class="container">
    <h1>I miei piatti</h1>

        <section
            v-for="meal in meals"
            :key="meal.id">
            <h3>
                {{ meal.piatto }}
            </h3>

        </section>

    <router-link class="btn btn-primary" :to="{name:'restaurant'}">
      My restaurant
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'addeditfood'}">
      add/edit food
    </router-link>
    <router-link class="btn btn-secondary" :to="{name:'dashboard'}">
      Return Dashboard
    </router-link>
  </section>
</template>

<script>

import axios from 'axios';
export default {
   name:'Meals',
   data(){
       return{
           meals:[],
           }
   },
      methods:{
     getMeals(){
         axios.get('http://127.0.0.1:8000/api/restaurants'+this.$route.params.id)
            .then( res => {
                console.log(res.data);
                 this.meals=res.data;
            })
            .catch( err => {
                console.log(err);
            })
     }
 },
 created(){
     this.getMeals();
 }
}
</script>

<style>

</style>
