import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './views/Login'

Vue.use(VueRouter)
const routes = [
  {
    path: '/',
    component: Login
  },
  {
    path: '/about',
    name: 'About',
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
