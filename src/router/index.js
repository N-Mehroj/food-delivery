import { createRouter, createWebHistory } from 'vue-router'
import {HomeView,LoginView,ForgotView,SignUpView,UserView,AddressView,PaymentView,SecurityView,OrdersView,NotFoundView,RestaurantsView} from '@/views'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/restaurants/:id',
      name: 'Restaurants',
      component: RestaurantsView
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
      path: '/orders',
      name: 'orders',
      component: OrdersView
    },
    {
      path: '/user/:id',
      component: UserView,
      name: 'user',
      children: [
        {
        path: 'address',
        component: AddressView,
        name: 'address',
        },
        {
        path: 'payment',
        component: PaymentView,
        name: 'payment',
        },
        {
        path: 'security',
        component: SecurityView,
        name: 'security',
        },
      ]      
    },
    {
      path: '/:notFound',
      component: NotFoundView,
    },
  ]
})

export default router
