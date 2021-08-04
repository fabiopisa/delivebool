<template>
  <div class="carrello">
     <h2 class="mt-3 text-white text-uppercase">Il tuo carrello</h2>
      <div class="mb-4 products" v-for="(product, index) in cart" :key="index">
        <div class=" mt-5">
          <div class="float-left">
            <img class="img-fluid mb-3" :src="product.img" />
            <h4 class="mb-3">{{product.name}}</h4>
          </div>

          <div class="price-card float-right text-center">
            <h5 class="price">prezzo {{product.price}}€</h5>
            <div class="d-block text-center">
              <button class="btn btn-quantita mr-3" v-on:click="quantityDecrement(product)">-</button>
              <span class="mr-3">X {{product['quantity']}}</span>
              <button class="btn btn-quantita mr-3 " v-on:click="quantityIncrement(product)">+</button>
            </div>
            <button class="btn btn-quantita" v-on:click="removeItemFromCart(product)">Rimuovi Prodotto</button>
          </div>
        </div>
    </div>
    <div class="mt-5 d-flex justify-content-between">
      
      <div class="ml-4 btn btn-tuttok mb-4">
        <router-link :to="{name: 'pay'}">Procedi al pagamento</router-link> 
      </div>
      <span class="text-white total"><strong>Totale:</strong> {{totPriceCart.toFixed(2)}}</span>

    </div>
  </div>
</template>

<script>
export default {
  name : 'Cart',
  props:["cart"],
  data(){
    return{
      totPriceMeal : 0,
      totPriceCart: 0,
      Order: this.cart
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
    console.log("order");
    console.log(this.Order)
    console.log("//order");
  }
}
</script>

<style lang='scss' scoped>
  .carrello{
    min-height: 45vh;
  }
  h2{
    margin-bottom: 80px;
  }
  .products{
    color: white;
    width: 100%;
    height: 300px;
    border-bottom: 1px solid white;
    margin: 30px;
    img{
      width: 370px;
      height: 250px;
      border-radius: 20px;
    }
    .price-card{
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      height: 300px;
      }
      .price{
        border: white solid 1px;
        border-radius: 10px;
        padding: 10px;
      }
        .btn-quantita{
          background-color: white;
          color: black;
          transition: transform .2s;
          &:hover{
            transform: scale(1.04);
          }
    }
  }
  .btn-tuttok{
    background-color: green;
    transition: transform .2s;
    a{
      text-decoration: none;
      color: white;
    }
    &:hover{
      transform: scale(1.04);

    }
  }
  .total{
    font-size: 20px;
  }
</style>