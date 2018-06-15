import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'

const routes = [
    { path: '/login', component: Login },
    // { path: '/forum', component: Forum },
  ]

  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history' //sklanjaju # iz url
  })


  export default router