<template>
    <div class="card flex-row mb-3" >
      <div class="card-body">

        <div class="cont">
            <div class="cont-nome">
              <img :src="img" alt="img-piatto">
            </div>

            <div class="img-des">
              <h4 class="card-title mb-4"><strong>{{ name }}</strong></h4>
              <p class="card-text">{{ description }}</p>
            </div>

            <div class="price-carr">
                <h5 class="price">{{price}}€</h5>
            </div>

        </div>
            <button class="btn btn-cart float-right" v-if="available === 1" v-on:click="addItemToCart(meal)">Aggiungi al carrello</button>
            <div class=" btn-disp float-right" v-if="available === 0" v-on:click="addItemToCart(meal)">Non Disponibile</div>
         <!--  <h5
          v-if="available === 0"
          >piatto non disponibile</h5>
          <h5
          v-if="available === 1"
          >disponibile</h5> -->

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
            available: this.available,
            restaurant_id : this.restaurant_id
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
    console.log('id del ristorante salvato in ogni piatto');
    console.log(this.$route.params.restaurant_id);
    console.log('//id del ristorante salvato in ogni piatto');
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
    .card-body{
        .cont{
            display: flex;
            .price-carr{
              display: flex;
              flex-direction: column;
              justify-content: space-between;
              .price{
                border: white solid 1px;
                border-radius: 10px;
                padding: 10px;
              }
            }
        }
        .img-des{
            display: flex;
            flex-direction: column;
        }
        img{
          border-radius: 20px;
            width: 350px;
            margin-right: 20px;
        }
      }
  }
  .post-cover{
    width: 300px;
        img{
          width: 100%;
        }
  }
  .btn-cart{
    width: 250px;
    background-color: lightskyblue;
  }
  .btn-disp{
    width: 250px;
    background-color: rgba(226, 92, 92);
    opacity: 0.8;
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    border: 1px solid transparent;
    border-radius: 5px;
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    line-height: 1.6;
  }
</style>
