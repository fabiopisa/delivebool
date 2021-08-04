<template>
  <section>
    <div v-if="!loaded" class="text-center pt-5 mt-5">
      <Loading/>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
      <!-- fare una card dei ristoranti dove passo array ristoranti.restaurants -->
      <!-- v-if="ristoranti.restaurants !== undefined" -->
      <div
      v-if="nRistoranti === 0 && loaded"
      class="not_found d-flex justify-content-center align-items-center"
      >
      </div>

      <div
      v-if="nRistoranti === 1 && loaded "
      >
        <div class="row">
          <CardRestaurant1
          class="col-xs-3 mr-4 card"
          :type="ristoranti.name"
          v-for="ristorante in ristoranti.restaurants"
          :key="'r'+ristorante.id"
          :id="ristorante.id"
          :nome_ristorante="ristorante.name"
          :indirizzo_ristorante="ristorante.address"
          />
        </div>

      </div>

      <!-- v-if="ristoranti.restaurants.length === 0" -->
      

    </div>
  </section>
</template>

<script>
import axios from 'axios';
import CardRestaurant1 from '../components/CardRestaurant1.vue';
import Loading from '../components/Home/Loading.vue'

export default {
  name:'AdvancedSearch',
  components:{
    CardRestaurant1,
    Loading
  },
  data(){
    return{
      ristoranti:[],
      nRistoranti : 0,
      loaded:false,
    }
  },
  methods:{
    getRistoranti(){

      this.loaded = false;
      axios.get('http://127.0.0.1:8000/api/categories/'+this.$route.params.name)
      .then(res =>{
        //console.log('cerco di associare il ristorante in base alla categoria ');
          this.ristoranti = res.data;
  
          //console.log(this.ristoranti.restaurants.length);
          if(this.ristoranti.restaurants.length > 0) this.nRistoranti = 1;
          //console.log("--------------");
          //console.log(res.data);
          //console.log('//cerco di associare il ristorante in base alla categoria ');
          this.loaded = true;
        })
    }
  },
  created(){
    this.nRistoranti = 0;
    this.getRistoranti();
  }
}
</script>

<style lang='scss' scoped>
  section{
    background-image: url('../../assets/img/sfondo-nuovo.jpg');
    width: 100%;
    height: calc(100vh - 100px);
    background-size: 100%;
  }
  .card{
    padding: 30px;
    border-radius: 46px;
   /*  background-image: url('../../assets/img/tagliere.png'); */
   background-color: rgba(0, 0, 0, .3);
    background-size: cover;

    color: white;

  }
  .not_found{
    width: 100%;
    height: calc(100vh - 100px);
    background-image: url('../../assets/img/rnt-01.png');
    background-repeat: no-repeat;
    background-size: 60%;
    background-position: center;

  }

</style>
