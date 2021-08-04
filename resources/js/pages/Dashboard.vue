<template>
  <section class="container">
    <h1>conferma ordine</h1>
    <div class="products">
      <div v-for="(item, index) in ordine" :key="index">
        <h3>nome piatto{{item.name}}</h3>
        <h3>{{item.description}}</h3>
        <h1>prova</h1>
        <img :src="item.img" />
        <h4>prezzo {{item.price}}€</h4>
        <span>quantity {{item['quantity']}}</span>
        
      </div>
        <h5>{{totPrice}}</h5>
    </div>
    <button v-if="totPrice !== 0">procedi all'ordine</button>
    <router-link class="btn btn-secondary" :to="{name:'home'}">
      Return Home
    </router-link>
  </section>
</template>

<script>
export default {
 name:'Dashboard',
 data(){
   return{
     ordine: this.$route.params.Order,
     totPrice: this.$route.params.totPriceCart
   }
 },
 created(){
  console.log("ordine");
  console.log(this.ordine);
  console.log("//ordine");

  console.log("Order");
  console.log(this.$route.params.Order);
  console.log("//Order");

  console.log("prezzo totale salvato");
  console.log(this.totPrice);
  console.log("//prezzo totale salvato");

  console.log("prezzo totale");
  console.log(this.$route.totPriceCart);
  console.log("//prezzo totale");


 }
}
</script>

<style>

</style>