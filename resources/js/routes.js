  
import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import AdvancedSearch from './pages/AdvancedSearch.vue';

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
    
  ]
})

export default router;