import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: '/',
    component: () => import('@/views/HomePage.vue'),
    name: 'HomePage'
  },
  {
    path: '/create',
    component: () => import('@/views/CreatePage.vue'),
    name: 'CreatePage'
  },
  {
    path: '/:slug',
    component: () => import('@/views/CategoryPage.vue'),
    name: 'CategoryPage'
  }
]

const router = createRouter({
  routes,
  history: createWebHistory(),
})

export default router