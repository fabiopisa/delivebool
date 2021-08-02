<template>
  <section>
    <div class="container">
      <!-- fare una card dei ristoranti dove passo array ristoranti.restaurants -->
      <!-- v-if="ristoranti.restaurants !== undefined" -->
      <div
      v-if="nRistoranti === 1"
      >
      <div class="row">

        <CardRestaurant1
        class="col-xs-4 mr-4"
        v-for="ristorante in ristoranti.restaurants"
        :key="'r'+ristorante.id"
        :id="ristorante.id"
        :nome_ristorante="ristorante.name"
        :indirizzo_ristorante="ristorante.address"
        />
      </div>
      </div>

      <!-- v-if="ristoranti.restaurants.length === 0" -->
      <div
      v-else
      >
      <h1>nessun ristorante trovato</h1>
      </div>
      
      <h5>Cerca qui</h5>
      <router-link class="btn btn-primary" :to="{name:'restaurant'}" >
        Resturant/Menu
      </router-link>
      <router-link class="btn btn-secondary" :to="{name:'home'}">
        Return Home
      </router-link>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
import CardRestaurant1 from '../components/CardRestaurant1.vue';
export default {
  name:'AdvancedSearch',
  components:{
    CardRestaurant1
  },
  data(){
    return{
      ristoranti:[],
      nRistoranti : 0
    }
  },
  methods:{
    getRistoranti(){
      axios.get('http://127.0.0.1:8000/api/categories/'+this.$route.params.name)
      .then(res =>{
        console.log('cerco di associare il ristorante in base alla categoria ');
          this.ristoranti = res.data;

          console.log(this.ristoranti.restaurants.length);
          if(this.ristoranti.restaurants.length > 0) this.nRistoranti = 1;
          console.log("--------------");
          console.log(res.data);
        console.log('//cerco di associare il ristorante in base alla categoria ');
        })
    }
  },
  created(){
    this.nRistoranti = 0;
    this.getRistoranti();
  }
}
</script>

<style>

</style>