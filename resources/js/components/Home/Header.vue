<template>
<section class="container">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <router-link class="btn btn-primary" :to="{name:'as'}" >
            Advanced Search
        </router-link>
        </li>

         <li class="nav-item">
            <router-link class="btn btn-primary" :to="{name:'as'}" >
                Resturant/Menu
            </router-link>
         </li>

        <li class="nav-item ">
            <router-link class="btn btn-primary" :to="{name:'account'}" >
                Sing-in or Login
            </router-link>
        </li>


      </ul>

    </div>
  </div>
</nav>

</section>
</template>

<script>
export default {
    name:'Header'

}
</script>

<style lang='scss'>
    li{
        margin-right: 10px;
    }
</style>
