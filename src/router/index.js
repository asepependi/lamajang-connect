import { createRouter,createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('@/views/home.vue')
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('@/views/login.vue')
  },
  {
    path: '/register',
    name: 'register',
    component: () => import('@/views/register.vue')
  },
  {
    path: '/budaya',
    name: 'budaya',
    component: () => import('@/views/budaya.vue')
  },
  {
    path: '/pariwisata',
    name: 'pariwisata',
    component: () => import('@/views/pariwisata/index.vue')
  },
  {
    path: '/pariwisata/:id/detail',
    name: 'pariwisata-detail',
    component: () => import('@/views/pariwisata/detail.vue')
  },
  {
    path: '/penginapan',
    name: 'penginapan',
    component: () => import('@/views/penginapan/index.vue')
  },
  {
    path: '/penginapan/:id/detail',
    name: 'penginapan-detail',
    component: () => import('@/views/penginapan/detail.vue')
  },
  {
    path: '/about-us',
    name: 'about-us',
    component: () => import('@/views/about-us.vue')
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes: routes
});

router.beforeEach((to, from, next) => {
  next();
  return;
})

export default router