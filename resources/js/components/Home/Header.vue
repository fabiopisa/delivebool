<template>
    <header>
      <div class="nav_hd d-flex justify-content-between align-items-center">
        <router-link :to="{name:'home'}">
          <img  class="rabbit" src="../../../assets/img/logo.svg" alt="">
        </router-link>
        <!-- <a href="http://127.0.0.1:8000">
          <img  class="rabbit" src="../../../assets/img/logo.svg" alt="">

        </a> -->
          <!-- <img  class="title_text" src="../../../assets/img/logotipo-01.svg" alt=""> -->
          <h1>Deliveboo</h1>

          <div v-if="hMenu" class="mt-4 mr-4">

              <input id="menu__toggle" type="checkbox" />
              <label class="menu__btn" for="menu__toggle">
              <span></span>
              </label>

              <ul class="menu__box">
                  <li class="mb-4">
                      <a href="http://127.0.0.1:8000/register">Crea il tuo account aziendale</a>
                  </li>
                  <li>
                      <a href="http://127.0.0.1:8000/login ">Accedi al tuo account aziendale</a>
                  </li>
              </ul>
          </div>

          <div  v-if="!hMenu">
              <h1>ciao</h1>

          </div>

      </div>
    </header>
</template>

<script>
export default {
    name:'Header',
    data(){
        return{
            hMenu:true
        }
    }


}
</script>

<style lang='scss' scoped>



  @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet');


    .nav_hd{
        width: 100%;
        height: 100px;
        background: linear-gradient(90deg, rgba(253,107,29,1) 10%, rgba(252,176,69,1) 100%);
        background-repeat: no-repeat;
        padding: 20px;


        .rabbit{
            width: 70px;
        }

        h1{
            /* font-family: 'Anton'; */
            font-weight: 800;
            text-transform: uppercase;
            color: white;
        }

        //trasformo da hamburger a X
        #menu__toggle {
          opacity: 0;
        }
        #menu__toggle:checked ~ .menu__btn > span {
          transform: rotate(45deg);
        }
        #menu__toggle:checked ~ .menu__btn > span::before {
          top: 0;
          transform: rotate(0);
        }
        #menu__toggle:checked ~ .menu__btn > span::after {
          top: 0;
          transform: rotate(90deg);
        }

        #menu__toggle:checked ~ .menu__box {
          visibility: visible;
          right: 0;
          z-index: 999;
        }

        .menu__btn {
          position: relative;
          margin-top: 10px;
          width: 26px;
          height: 26px;
          cursor: pointer;
        }


        .menu__btn > span,
        .menu__btn > span::before,
        .menu__btn > span::after {
          display: block;
          position: absolute;

          width: 100%;
          height: 2px;
          background-color: white;
          transition-duration: .25s;
        }
        .menu__btn > span::before {
          content: '';
          top: -8px;
        }
        .menu__btn > span::after {
          content: '';
          top: 8px;
        }

        .menu__box {
          position: fixed;
          right: -300px;
          visibility: hidden;
          width: 300px;
          height: 150px;
          margin: 30px 10px 0 0;
          padding: 30px 10px;
          list-style: none;
          background-color: rgba(252,176,69,1);
          border-radius: 5px;
          box-shadow: 1px 0px 6px rgba(0, 0, 0, .2);

          transition-duration: .50s;
          li a{
            color: white;
            font-size: 14px;
            margin-bottom: 7px;
          }
        }

        .menu__item {
          display: block;
          padding: 12px 24px;
          color: rgb(255, 255, 255);
          font-family: 'Roboto', sans-serif;
          font-size: 22px;
          font-weight: 600;
          text-decoration: none;
          transition-duration: .25s;
        }
        .menu__item:hover {
          background-color: #CFD8DC;
        }
    }

</style>
