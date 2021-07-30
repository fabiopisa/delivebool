  
import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import AdvancedSearch from './pages/AdvancedSearch.vue';
import Restaurant from './pages/Restaurant.vue';
import Account from './pages/Account.vue';
import Dashboard from './pages/Dashboard.vue';
import Orders from './pages/Orders.vue';
import Foods from './pages/Foods.vue';
import AddEditFood from './pages/AddEditFood.vue';
//componente per far vedere il menu
import Menu from './pages/Menu';

const router = new VueRouter({
  
  mode: 'history',
  linkExactActiveClass:'active',
  routes:[

    {
      path:'/',
      name: 'home',
      component: Home
    },
    {
      path:'/advancedSearch',
      name: 'as',
      component: AdvancedSearch
    },
    {
      path:'/restaurant',
      name: 'restaurant',
      component: Restaurant
    },
    //aggiungo una rotta per il menu
    {
      path:'/menuRestaurant/:id',
      name:'menuRestaurant',
      component: Menu
    },
    {
      path:'/account',
      name: 'account',
      component: Account
    },
    {
      path:'/dashboard',
      name: 'dashboard',
      component: Dashboard
    },
    {
      path:'/orders',
      name: 'orders',
      component: Orders
    },
    {
      path:'/foods',
      name: 'foods',
      component: Foods
    },
    {
      path:'/addeditfood',
      name: 'addeditfood',
      component: AddEditFood
    },
    
  ]
})

export default router;