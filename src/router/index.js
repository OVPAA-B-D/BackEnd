import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/login.vue'
import ProgramLevel from '../views/programLevel.vue'
import Home_admin from '../views/Home_admin.vue'
import Home_taskforce from '../views/Home_taskforce.vue'
import Home_accreditor from '../views/Home_accreditor.vue'
import Dashboard from '../views/dashboard_admin.vue'
import Program_area from '../views/program_area.vue'
import Program_parameter from '../views/program_parameter.vue'
import Public_folder from '../views/public_folder.vue'
import Office_admin from '../views/office_admin.vue'
const routes = [
  {
    path: '/',
    name: 'Home',
    component: Login
  },
  {
    path: '/program_level',
    name: 'Program Level',
    component: ProgramLevel
  },
  {
    path: '/program_area',
    name: 'Program Area',
    component: Program_area
  },
  {
    path: '/office_admin',
    name: 'Office Admin',
    component: Office_admin
  },
  {
    path: '/home_admin',
    name: 'Home Admin',
    component: Home_admin
  },
  {
    path: '/home_taskforce',
    name: 'Home Taskforce',
    component: Home_taskforce
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard
  },

  {
    path: '/program_parameter',
    name: 'Program parameter',
    component: Program_parameter
  },

  {
    path: '/public_folder',
    name: 'Public folder',
    component: Public_folder
  },

  {
    path: '/home_accreditor',
    name: 'Home accreditor',
    component: Home_accreditor
  },

  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
