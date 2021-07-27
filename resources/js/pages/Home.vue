<template>
<div class="wrapper">


<div class="home">

        <img src="../../assets/img/deliveboo.png" alt="img-logo">
        <div class="btn-restaurant">
            <button class="register">
                Crea il tuo account aziendale
            </button>
            <button class="login">
                Accedi al tuo account aziendale
            </button>
        </div>

        <div class="jumbotron">
            <img src="../../assets/img/jumbo-01.png" alt="jumbo-center">
        </div>

</div>

    <Footer />


</div>
</template>

<script>
import Header from '../components/Home/Header.vue';
import Footer from '../components/Home/Footer.vue';
export default {
  name:'Home',
  components:{
      Header,
      Footer
  }
}
</script>

<style lang='scss' scoped>

.wrapper{
    background-image: url('../../assets/img/copertina-01.jpg');
    background-repeat: no-repeat;
    background-size:cover;
    height: 100vh;
    .home{
        text-align: center;
        height: 100vh;

        img{
            width: 30%;
            margin-top: 30px;
            margin-left: 10px;

        }
        .btn-restaurant{
                height: 160px;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                button{
                    width: 200px;
                    padding: 20px;
                    outline: none;
                    margin: 10px;
                    border-radius: 15px;
                    border:solid 1px white;
                    background-color: rgba(255, 68, 0, 0.3);
                    font-size: 18px;
                    font-weight: 600;
                    color: white;
                    &:hover{
                        background-color: rgba(255, 69, 0, 0.7);
                    }
                }

            }
            .jumbotron{
                margin-top: 70px;
                background-color: transparent;
            }
    }
}



</style>
