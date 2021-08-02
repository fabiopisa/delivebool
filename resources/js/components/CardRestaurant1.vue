<template>
  <div class="card d-flex mb-3 mt-3">
    <h4> <span style="font-weight:bold;">ristorante :</span>  {{nome_ristorante}}</h4>
    <h5><span style="font-weight:bold;">indirizzo ristorante :</span> {{indirizzo_ristorante}}</h5>
    <router-link class="btn btn-primary" :to="{name: 'menuRestaurant', params:{id}}" >Menù</router-link>
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

<style lang="">

</style>