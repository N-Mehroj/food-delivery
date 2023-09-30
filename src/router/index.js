import { createRouter, createWebHistory } from 'vue-router'
import {HomeView,LoginView,ForgotView,SignUpView,UserView,NotFoundView} from '@/views'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
    {
      path: '/forgot',
      name: 'forgot',
      component: ForgotView
    },
    {
      path: '/register',
      name: 'register',
      component: SignUpView
    },
    {
      path: '/user/:id',
      component: UserView,
      name: 'user',      
    },
    {
      path: '/:notFound',
      component: NotFoundView,
    },
  ]
})

export default router
