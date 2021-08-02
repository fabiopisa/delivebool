<template>
  <div class="card d-flex mb-5">
    <h4 class="mb-4"> <span style="font-weight:bold;">Nome:</span>  {{nome_ristorante}}</h4>
    <h5><span style="font-weight:bold;">Indirizzo:</span> {{indirizzo_ristorante}}</h5>
    <router-link class="btn  btn-deli mt-5" :to="{name: 'menuRestaurant', params:{id}}" >Menù</router-link>
  </div>
  

</template>

<script>
export default {
  name: 'CardRestaurant',
  props:['nome_ristorante','indirizzo_ristorante','id'],
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