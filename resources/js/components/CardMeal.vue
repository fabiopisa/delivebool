<template>
    <div class="card flex-row mb-3" >
      <div class="card-body">
          <div class="d-flex justify-content-between">
              <h5 class="card-title">{{ name }}</h5>
          </div>
          <p class="card-text">{{ description }}</p>
          <h5>{{price}}€</h5>
          <h5
          v-if="available === 0"
          >piatto non disponibile</h5>
          <h5
          v-if="available === 1"
          >disponibile</h5>
          <img :src="img" alt="">
        <button class="btn btn-primary float-right" v-if="available === 1" v-on:click="addItemToCart(meal)">Aggiungi al carrello</button>
        <hr>
      </div>
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

<style lang='scss' scoped>
  .card{
    background-color: transparent;
    color: white;
  }
  .post-cover{
        width: 300px;
        img{
            width: 100%;
        }
  }

</style>