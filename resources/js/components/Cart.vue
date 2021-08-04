<template>
  <div>
     <h1>Your Cart</h1>
      <div class="products">
      <div v-for="(product, index) in cart" :key="index">
        <h3>nome piatto{{product.name}}</h3>
        <h3>{{product.description}}</h3>
        <h1>prova</h1>
        <img :src="product.img" />
        <h4>prezzo {{product.price}}€</h4>
        <button v-on:click="quantityDecrement(product)">-</button>
        <span>quantity {{product['quantity']}}</span>
        <button v-on:click="quantityIncrement(product)">+</button>
        <button v-on:click="removeItemFromCart(product)">Remove from cart</button>
      </div>
    </div>
    <h1>tot cart {{totPriceCart.toFixed(2)}}</h1>
  </div>
</template>

<script>
export default {
  name : 'Cart',
  props:["cart"],
  data(){
    return{
      totPriceMeal : 0,
      totPriceCart: 0
    }
  },
  methods: {
    removeItemFromCart(product) {
      this.totPriceMeal = 0; //variabile di lavoro  = 0
      this.totPriceMeal = product.price * product.quantity;
      this.totPriceCart = this.totPriceCart - this.totPriceMeal;
      this.$emit("removeItemFromCart", product);
    },
    quantityDecrement(product){
      if(product.quantity === 1){
        product.quantity = 1;
      }else{
        product.quantity--;
        this.totPriceCart = this.totPriceCart - product.price;
      }
    },
    quantityIncrement(product){
      product.quantity++;
      this.totPriceCart = this.totPriceCart + product.price;
    }
  },
  created(){
    console.log('vediamo il cart nel created')
    this.cart.forEach(element => {
      console.log('visualizzo il prezzo prima di moltiplicarlo');
      console.log(element.price);
      console.log('//visualizzo il prezzo prima di moltiplicarlo');
      console.log('visualizzo la quantità prima di moltiplicarla');
      console.log(element.quantity);
      console.log('//visualizzo la quantità prima di moltiplicarla');

      console.log('visualizzo la variabile che conterrà il tot');
      console.log(this.totPriceMeal);
      console.log('//visualizzo la variabile che conterrà il tot');
      this.totPriceMeal = element.price * element.quantity;

      console.log('mi salvo in una variabile il totale per ogni piatto');
      this.totPriceCart = this.totPriceCart + this.totPriceMeal
      console.log('//mi salvo in una variabile il totale per ogni piatto');
      console.log('visualizzo il totale una volta calcolata');
      console.log(this.totPriceMeal);
      console.log('//visualizzo il totale una volta calcolata');

      console.log('visualizzo il totale del carrello');
      console.log(this.totPriceCart);
      console.log('//visualizzo il totale del carrello');
      
      console.log('visualizzo gli elementi presenti dentro element');
      console.log(element);
      console.log('//visualizzo gli elementi presenti dentro element');
    }

    );
    console.log('vediamo il cart nel created')
    console.log(this.cart)
  }
}
</script>

<style>

</style>