<template>
  <div class="sfondo">
    <nav class="">
      <button v-if="page === 'cart'" 
      class="btn" v-on:click="navigateTo('meals')">vedi piatti ordinati</button>
      {{cart.length}}
      <button v-if="page === 'meals'" 
      class="btn" v-on:click="navigateTo('cart')">vedi carrello</button>
      <button class="btn" v-if="page === 'cart'" v-on:click="removeCart()">cancella carrello</button>
    </nav>
    <main class="container">
        <div v-if="page === 'cart'">
          <Cart v-on:removeItemFromCart="removeItemFromCart" :cart="cart" /> 
          <!-- questo è il componente del carrello -->
        </div>

        <div v-if="page === 'meals'">
          
          <!-- <CardMeal
            :meals = "meals"
          /> -->
          <div class="row d-flex ">
            <CardMeal
            :restaurant_id ="restaurant_id"
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
      page : "meals",
      restaurant_id : this.$route.params.id
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

        .catch(err => err);


    },
    /* metodi relativi al cart */
    addItemToCart(product){
     console.log('visualizzo il prodotto');
      console.log(product);
      console.log('//visualizzo il prodotto');
      /* if(this.cart.includes(product)){

      } */
      if(!this.cart.includes(product)){
        product['quantity'] = 1;
        console.log('setto la quantità del piatto a 1');
        this.cart.push(product);
        console.log(this.cart);
      }else{
        /* product['quantity'] = this.cart.product.quantity; */
        product['quantity'] += 1;
        console.log('quantità salvata e incrementata');
        console.log(product['quantity']); 
        console.log('//quantità salvata e incrementata');
      }
      /*  if(this.cart.includes(product)){
        console.log("è contenuto");
        product['quantity'] = 'ciao';
        console.log(product['quantity']);
      }else{
        this.cart.push(product);
        console.log(this.cart);
      } */
    },
    removeItemFromCart(product){
      this.cart.splice(this.cart.indexOf(product),1);//splice per sostituire cosa? prende la posizione del prodotto con indexof e lo sostituisce
    },
    navigateTo(page){
      this.page = page;
    },
    removeCart(){
      this.cart = [];
    },
    quantityDecrement(product){
      if(product['quantity'] === 0){
        this.removeItemFromCart(product)
      }else{
        product['quantity'] -= 1;
      }
    }
  },
  created(){
    console.log('qui cerco di far vedere id che ho passato nei params e di salvare la mia salute mentale ')
    console.log("id del ristorante non ancora salvato");
    console.log(this.$route.params.id);
    console.log("//id del ristorante non ancora salvato");
    console.log("id del ristorante salvato");
    console.log(this.restaurant_id);
    console.log("//id del ristorante salvato");
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

<style lang='scss' scope>
  .sfondo{
    background-image: url('../../assets/img/bg-res-01.jpg');
    width: 100%;
    height: 100%;
    background-size: cover;
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


  nav button {
    border: none;
    cursor: pointer;
    color: white;
    background-color: green;
  }
</style>