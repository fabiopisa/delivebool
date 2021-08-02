<template>
  <div class="card mb-3 flex-row">
    <h1>{{id}}</h1>
    <h1>{{name}}</h1>
    <p>{{description}}</p>
    <h3>{{price}}€</h3>
    <h5
    v-if="available === 0"
    >piatto non disponibile</h5>
    <h5
    v-if="available === 1"
    >disponibile</h5>
    <img :src="img" alt="">
    <button v-if="available === 1" v-on:click="addItemToCart(meal)">Aggiungi al carrello</button>
  </div>
</template>

<script>
export default {
  name: 'CardMeal',
  props:['id','name','description','price','available','img'],
  data(){
    return{
      meal : {
            id: this.id,
            name: this.name,
            description: this.description,
            price: this.price,
            img: this.img,
            available: this.available
      }
        
      
    }
  },
  methods:{
    addItemToCart(product){
      console.log('questo è per vedere se salva la proprs in meals');
      console.log(this.meal);
      console.log('//questo è per vedere se salva la proprs in meals');
      console.log(product);
      this.$emit("addItemToCart",product);
    }
  },
  created(){
    console.log('qui faccio vedere meal salvato nel cardmeal');
    console.log(this.meal);
    console.log('//qui faccio vedere meal salvato nel cardmeal');
  }
}
</script>

<style>

</style>