<template>
  <div class="card d-flex mb-5">
    
      <h3 class="mb-4"> <span style="font-weight:bold;"></span>  {{nome_ristorante}}</h3>
      <h5><span style="font-weight:bold;"></span>{{indirizzo_ristorante}}</h5>
      <h5><span>{{type}}</span></h5>
      <router-link class="btn  btn-deli mt-5" :to="{name: 'menuRestaurant', params:{id}}" >Menù</router-link>
  </div>





</template>

<script>
export default {
  name: 'CardRestaurant',
  
  props:['nome_ristorante','indirizzo_ristorante','id','type'],
  methods:{
    showId(){
      console.log(this.id);
    }
  },
  created(){
    this.showId();
  }
}
</script>

<style lang='scss' scoped>
  .card{
    margin-top: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 300px;
    flex-wrap: wrap;
    background: linear-gradient(180deg, rgba(253,107,29,1) 10%, rgba(252,176,69,1) 100%);
  }
  .btn-deli {
  box-sizing: border-box;
  appearance: none;
  background-color: rgba(0, 0, 0, .4);
  border: 2px solid white;
  border-radius: 0.6em;
  color: white;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;

  &:hover{
    background-color: #ce6108;
    transform: scale(1.05);
  }
  &:focus {
    color: #fff;
    outline: 0;
  }
}
</style>
