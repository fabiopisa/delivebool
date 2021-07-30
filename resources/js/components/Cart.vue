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
        <button v-on:click="removeItemFromCart(product)">Remove from cart</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name : 'Cart',
  props:["cart"],
  methods: {
    removeItemFromCart(product) {
      this.$emit("removeItemFromCart", product);
    }
  },
  created(){
    console.log(this.cart)
  }
}
</script>

<style>

</style>