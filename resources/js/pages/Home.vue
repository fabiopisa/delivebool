<template>
  <div class=" bk-home">
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

<!--     <router-link class="btn btn-primary" :to="{name:'as'}" >
      Advanced Search
    </router-link>
    <router-link class="btn btn-primary" :to="{name:'as'}" >
      Resturant/Menu
    </router-link> -->
    <!-- <router-link class="btn btn-primary" :to="{name:'account'}" >
      Sing-in or Login
    </router-link> -->
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
      categories:[], //array che contiene il risultato della chiamata axios

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
    background-image: url('../../assets/img/bg_home-01.jpg');
    width: 100%;
    height: calc(100vh - 100px);
    background-size: cover;
    padding: 0 20px;
      h1{
        font-size: 40px;
        text-shadow: 3px 3px 7px rgba(0, 0, 0, 1);
        padding-top: 50px;
      }

      .jumbotron{
        width: 70%;
        background-color: transparent;

      }
    }

</style>
