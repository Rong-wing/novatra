import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import ShowcaseView from '../views/ShowcaseView.vue'
import PHPApiView from '../views/PHPApiView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView,
    },
    {
      path: '/showcase',
      name: 'Showcase',
      component: ShowcaseView,
    },
    {
      path: '/php_api',
      name: 'php api',
      component: PHPApiView,
    },
  ],
})

export default router
