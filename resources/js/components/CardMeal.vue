<template>
  <div class="card flex-row mb-3">
    <h1>{{id}}</h1>
    <h1>{{name}}</h1>
    <p>{{description}}</p>
    <h3>{{price}}</h3>
    <h5>{{avaiable}}</h5>
    <img :src="{img}" alt="">
    <button v-on:click="addItemToCart(meal)">Aggiungi al carrello</button>
  </div>
</template>

<script>
export default {
  name: 'CardMeal',
  props:['id','name','description','price','avaiable','img'],
  data(){
    return{
      meal : {
            id: this.id,
            name: this.name,
            description: this.description,
            price: this.price,
            img: this.img,
            avaiable: this.avaiable
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
}
</script>

<style>

</style>