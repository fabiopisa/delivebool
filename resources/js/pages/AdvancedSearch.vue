<template>
  <section>
    <div class="container">
      <!-- fare una card dei ristoranti dove passo array ristoranti.restaurants -->
      <h1>Cerca qui</h1>
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

export default {
  name:'AdvancedSearch',
  data(){
    return{
      ristoranti:[]
    }
  },
  methods:{
    getRistoranti(){
      axios.get('http://127.0.0.1:8000/api/categories/'+this.$route.params.name)
      .then(res =>{
        console.log('cerco di associare il ristorante in base alla categoria ');
          this.ristoranti = res.data;
          console.log(this.ristoranti);
          console.log("--------------");
          console.log(res.data);
        console.log('//cerco di associare il ristorante in base alla categoria ');
        })
    }
  },
  created(){
    this.getRistoranti();
  }
}
</script>

<style>

</style>