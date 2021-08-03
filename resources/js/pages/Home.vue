<template>
  <div class=" bk-home">
    <div class="categories">
      <h1 class=" text-center text-white">Il cibo che ami, <br> comodamente a casa tua</h1>

      <div class="d-flex justify-content-center">

        <div class="jumbotron d-flex flex-wrap justify-content-center">
          <CardCategory
          v-for="category in categories"
          :key="'c' + category.category_id"
          :nome_categoria="category.nome_categoria"
          :category_id="category.category_id"
          />
          
        </div>
      </div>

    </div>

<!--     <router-link class="btn btn-primary" :to="{name:'as'}" >
      Advanced Search
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'as'}" >
      Resturant/Menu
    </router-link> -->
    <!-- <router-link class="btn btn-primary" :to="{name:'account'}" >
      Sing-in or Login
    </router-link> -->
    <div class="d-flex justify-content-center m-auto box-home">
      <div class="d-flex  justify-content-between align-items-center m-auto">

        <div class="card-gn card-1">
          <div class="text-card">
            <h4>Rider</h4>
            <p>Diventa un rider: flessibilità, ottimi guadagni e un mondo di vantaggi per te.</p>
            <button>Unisciti a noi</button>
          </div>
        </div>

        <div class="card-gn card-2">
          <div class="text-card">
            <h4>Ristoranti</h4>
            <p>Diventa partner di Deliveroo e raggiungi sempre più clienti. Ci occupiamo noi della consegna.</p>
            <button>Diventa nostro partner</button>
          </div>
        </div>

        <div class="card-gn card-3">
          <div class="text-card">
            <h4>Lavora con noi</h4>
            <p class="mt-4">La nostra missione è trasformare il modo in cui le persone mangiano.  È un obiettivo ambizioso, come noi.</p>
            <button>Scopri di più</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
import axios from 'axios';
import CardCategory from '../components/CardCategory.vue'
export default {
  name:'Home',
  components:{
    CardCategory
  },

  data(){
    return{
      categories:[] //array che contiene il risultato della chiamata axios
    }
  },
  methods:{
    getCategories(){
      axios.get('http://127.0.0.1:8000/api/categories')
        .then(res =>{
            this.categories = res.data;
            console.log(this.categories); //"qui visualizzo l'array di ristoranti che salvo "
            console.log(res.data); //"qui visualizzo il risultato della chiamata axios"

            console.log(this.categories[0].category_id);
        })
        .catch(err => {
          console.log(err);
        })
    }
  },
  mounted(){
    console.log("sodkaoskd")
    console.log(this.categories);
  },
  created(){
    this.getCategories();
  }

}
</script>



<style lang='scss' scoped>


  .bk-home{
    width: 100%;
    height: 100%;
    .categories{
      background-image: url('../../assets/img/bg_home-01.jpg');
      background-size: cover;
      
    }
    h1{
      font-size: 40px;
      text-shadow: 3px 3px 7px rgba(0, 0, 0, 1);
      padding-top: 50px;
    }
  
    .jumbotron{
      width: 75%;
      background-color: transparent;

    }
    .box-home{
      width: 100%;
      height: 100%;
      background-color: #FFEAE4;
    }
    .card-gn{
      position: relative;
      width: 350px;
      height: 600px;
      background-size: cover;
      padding: 35px;
      margin: 20px;
      border-radius: 10px;
      -webkit-box-shadow: 7px 6px 9px 0px rgba(0,0,0,0.67);  box-shadow: 7px 6px 9px 0px rgba(0,0,0,0.67);
    }
    .card-1{
      background-image: url('../../assets/img/card1.jpg');
    }
    .card-2{

      background-image: url('../../assets/img/card2.jpg');


    }
    .card-3{
  
      background-image: url('../../assets/img/card3.jpg');

    }
    .text-card{
      position: absolute;
      bottom: 30px;
      left: 0;
      color: white;
      padding: 10px;
      text-align: center;
      h4{
        font-size: 18px;
        text-transform: uppercase;
        margin-bottom: 20px;
      }
      p{
        font-size: 14px;
        margin-bottom: 15px;
      }
      button{
        padding:10px;
        border: 1px solid white;
        border-radius: 5px;
        background-color: transparent;
        color: white;
        &:hover{
          background-color: white;
          color: orange;
        }
      }
    }

  }
  
</style>