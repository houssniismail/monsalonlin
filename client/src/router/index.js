import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const isLoggedIn = () => {
  return localStorage.getItem('userRef') !== null
}
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path:'/login',
      name : "login",
      component : ()=>import("../views/LoginView.vue")
    },
    {
      path:'/register',
      name : "register",
      component : ()=>import("../views/RegisterView.vue")
    },
    {
      path: '/reserve',
      component: () => import('../views/ReserveView.vue'),
      beforeEnter(to, from, next) {
        if (!isLoggedIn()) {
          next({ path: '/login' })
        } else {
          next()
        }
      },
    },
    {
      path: '/Rdv',
      component: () => import('../views/RdvView.vue')
    },
  ]
})

export default router
