import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import Signup from '../components/login/Signup'

const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: Signup },
    // { path: '/forum', component: Forum },
  ]

  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false, //sklanjaju # iz url
    mode : 'history' //sklanjaju # iz url
  })


  export default router