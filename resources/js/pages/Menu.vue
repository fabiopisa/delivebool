<template>

  <div class="sfondo">

    <nav class="">
      <!-- <button class="btn" v-on:click="navigateTo('meals')">vedi piatti</button> -->

      <button class="btn" v-on:click="navigateTo('cart')">vedi carrello</button>
         <div class="cart-length">
             {{cart.length}}
         </div>
      <button class="btn" v-if="page === 'cart'" v-on:click="removeCart()">cancella carrello</button>
    </nav>
    <main class="container">
        <div v-if="!loaded" class="text-center mt-5">
          <Loading/>
        </div>
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
            class=""
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
import Loading from '../components/Home/Loading.vue';



export default {
  name: 'Menu',
  components:{
    CardMeal,
    Cart,
    Loading
  },
  data(){
    return{
      menu:[],
      cart:[],
      page : "meals",
      loaded:false,
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
      this.loaded = false;
      axios.get('http://127.0.0.1:8000/api/restaurants/'+this.$route.params.id)
        .then(res =>{
          this.menu = res.data;
          console.log('questo è il menu completo');
          console.log(this.menu);
          console.log('//questo è il menu completo');
          console.log(res.data);

          this.loaded = true;

        })

        .catch(err => err);


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

<style lang='scss' scope>
  .sfondo{
    background-image: url('../../assets/img/bg-res-01.jpg');
    width: 100%;
    height: 100%;
    background-size: cover;
    nav{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        button{
            border: solid 1px white;
            color: white;
            background: linear-gradient(90deg, rgba(253,107,29,1) 10%, rgba(252,176,69,1) 100%);
            height: 40px;
        }
        .cart-length{
            color: white;
            border: solid 1px white;
            background: linear-gradient(90deg, rgba(253,107,29,1) 10%, rgba(252,176,69,1) 100%);
        }

    }

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
