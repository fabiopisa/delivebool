<template>

<footer>
      <div class="d-flex justify-content-around align-content-center flex-wrap pr-5 mr-5">

        <nav class="mt-4">
          <ul>
            <h4>Scopri Deliveboo</h4>
            
            <li><a href="#">Investitori</a></li>
            <li><a href="#">Chi Siamo</a></li>
            <li><a href="#">Ristoranti</a></li>
            <li><a href="#">Lavora con noi</a></li>
            <li><a href="#">Diventa il nostro Patner</a></li>
            <li><a href="#">Altro</a></li>
          </ul>
        </nav>
          <nav class="mt-4">
            <ul>
              <h4>Note Legali</h4>
              
              <li><a href="#">Termini e Condizioni</a></li> 
              <li><a href="#">Informazioni privacy</a></li> 
              <li><a href="#">Cookies</a></li> 
            </ul>
          </nav>
        <nav class="mt-4">
          <ul>
            <h4>Aiuto</h4>
            
            <li><a href="#">Contatti</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Tipi cucina</a></li>
            <li><a href="#">Mappa sito</a></li>

          </ul>
        </nav>

        <nav class="mt-4 social">
            <h4>Social</h4>
          <ul class="d-flex social">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
          </ul>
        </nav>
      
      </div>
      
  </footer>  
</template>

<script>
export default {
    name:'Footer'

}
</script>

<style lang="scss" scoped>


  footer{
    background: linear-gradient(90deg, rgba(253,107,29,1) 10%, rgba(252,176,69,1) 100%);
    height: 100%;
    background-size: cover;
    z-index: 999;
    nav{
      margin-right: 25px;
      ul{
        list-style: none;
        padding: 0;
      }
      h4{
        color: white;
        text-transform: uppercase;
        margin: 10px 0;
      }
      li{
        padding: 5px 0;
        a{
          font-size: 11px;
          color: #ffffffb7;
          text-decoration: none;
          &:hover{
            color:white;
          font-size: 12px;
          }
        }
      }
    }
    .social{
      display: inline;
      i{
        color: #ffffffcb;
        font-size: 35px;
        margin-right: 15px;
        &:hover{
          color:white;
        }
      }
    }
  }

  
</style>
