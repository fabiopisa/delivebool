<template>
  <div>
    <CardMeal
    v-for="meal in menu.meals"
    :key = "'m'+meal.id"
    :id ="meal.id"
    :name = "meal.name"
    :description ="meal.description"
    :price ="meal.price"
    :avaiable ="meal.avaiable"
    />
  </div>
</template>

<script>
import axios from 'axios';
import CardMeal from '../components/CardMeal.vue';

export default {
  name: 'Menu',
  components:{
    CardMeal
  },
  data(){
    return{
      menu:[]
    }
  },
  methods:{
    getMenu(){
      axios.get('http://127.0.0.1:8000/api/restaurants/'+this.$route.params.id)
        .then(res =>{
          this.menu = res.data;
          console.log(res.data);
        })

    }
  },
  created(){
    console.log('qui cerco di far vedere id che ho passato nei params e di salvare la mia salute mentale ')
    console.log(this.$route.params.id);
    this.getMenu();
    console.log('sarà partita la chiamata axios? bho dio cane');
  }
}
</script>

<style>

</style>