import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/fichier',
    name: 'Fichier',
    component: () => import('../views/Fichier.vue')
  },
  {
    path: '/url',
    name: 'URL',
    component: () => import('../views/Url.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
