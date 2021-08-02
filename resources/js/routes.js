  
import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import AdvancedSearch from './pages/AdvancedSearch.vue';
import Restaurant from './pages/Restaurant.vue';
import Dashboard from './pages/Dashboard.vue';
//componente per far vedere il menu
import Menu from './pages/Menu';

const router = new VueRouter({
  
  mode: 'history',
  linkExactActiveClass:'active',
  routes:[
    /* nella home visualizzo i tasti login register per lato uR e ricerca in base alla tipologia di ristorante*/
    {
      path:'/',
      name: 'home',
      component: Home
    },
    /* mi ritrovo una volta cliccato la tipologia di ristorante contiene anche la searchbar */
    {
      path:'/advancedSearch/:name',
      name: 'advancedSearch',
      component: AdvancedSearch
    },
    /* visualizzo tutti i ristoranti presenti con la searchbar */
    {
      path:'/restaurant',
      name: 'restaurant',
      component: Restaurant
    },
    //aggiungo una rotta per il menu del singolo ristorante
    {
      path:'/menuRestaurant/:id',
      name:'menuRestaurant',
      component: Menu
    },
    /* possibile componente da usare dopo il carrello */
    {
      path:'/dashboard',
      name: 'dashboard',
      component: Dashboard
    }
    
  ]
})

export default router;