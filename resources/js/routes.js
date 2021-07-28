
import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import AdvancedSearch from './pages/AdvancedSearch.vue';
import Restaurant from './pages/Restaurant.vue';
import Account from './pages/Account.vue';
import Dashboard from './pages/Dashboard.vue';
import Orders from './pages/Orders.vue';
import Meals from './pages/Meals.vue';
import AddEditFood from './pages/AddEditFood.vue';
import Cart from './pages/Cart.vue';

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
      path:'/restaurant/:id',
      name: 'meals',
      component: Meals
    },
    {
      path:'/addeditfood',
      name: 'addeditfood',
      component: AddEditFood
    },
    {
      path:'/cart',
      name: 'cart',
      component: Cart
    },

  ]
})

export default router;
