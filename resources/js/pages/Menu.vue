<template>
  <div>
    <header>
      <button v-on:click="navigateTo('meals')">vedi piatti ordinati</button>
      {{cart.length}}
      <button v-on:click="navigateTo('cart')">vedi carrello</button>
      <button v-if="page === 'cart'" v-on:click="removeCart()">cancella carrello</button>
    </header>
    <main>
        <div v-if="page === 'cart'">
          <Cart v-on:removeItemFromCart="removeItemFromCart" :cart="cart" /> 
          <!-- questo è il componente del carrello -->
        </div>

        <div v-if="page === 'meals'">
          
          <!-- <CardMeal
            :meals = "meals"
          /> -->

          <CardMeal
          v-for="(meal, index) in menu.meals"
          :key = "index"
          :id ="meal.id"
          :name = "meal.name"
          :description ="meal.description"
          :price ="meal.price"
          :img = "meal.img"
          :available ="meal.available"
          v-on:addItemToCart="addItemToCart"
          />

        </div>
    </main>
  </div>
</template>

<script>
import axios from 'axios';
import CardMeal from '../components/CardMeal.vue';
import Cart from '../components/Cart.vue';

export default {
  name: 'Menu',
  components:{
    CardMeal,
    Cart
  },
  data(){
    return{
      menu:[],
      cart:[],
      page : "meals"
    }
  },
  watch:{
    cart:{
      handler(newCart){
        localStorage.cart = JSON.stringify(newCart); 
      },
      deep: true
    }
  },
  methods:{
    getMenu(){
      axios.get('http://127.0.0.1:8000/api/restaurants/'+this.$route.params.id)
        .then(res =>{
          this.menu = res.data;
          console.log('questo è il menu completo');
          console.log(this.menu);
          console.log('//questo è il menu completo');
          console.log(res.data);
        })
    },
    /* metodi relativi al cart */
    addItemToCart(product){
      this.cart.push(product);
      console.log(this.cart);
    },
    removeItemFromCart(product){
      this.cart.splice(this.cart.indexOf(product),1);//splice per sostituire cosa? prende la posizione del prodotto con indexof e lo sostituisce
    },
    navigateTo(page){
      this.page = page;
    },
    removeCart(){
      this.cart = [];
    }
  },
  created(){
    console.log('qui cerco di far vedere id che ho passato nei params e di salvare la mia salute mentale ')
    console.log(this.$route.params.id);
    this.getMenu();
    console.log('sarà partita la chiamata axios? bho dio cane');
    console.log(this.cart);
  },
  mounted(){
    if(localStorage.cart){
      this.cart = JSON.parse(localStorage.cart);
    }
  }
}
</script>

<style>
body {
  margin: 0;
}
.products {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.products button {
  padding: 10px;
  background-color: black;
  color: white;
  outline: none;
  border: none;
  cursor: pointer;
}
</style>

<style scoped>
header {
  height: 60px;
  box-shadow: 2px 2px 5px blue;
  background-color: pink;
  text-align: right;
  font-size: 30px;
  padding-top: 20px;
}
header button {
  padding: 10px;
  border: none;
  cursor: pointer;
  color: white;
  background-color: green;
}
</style>