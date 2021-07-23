import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/login.vue'
import ProgramLevel from '../views/programLevel.vue'
import Home_admin from '../views/Home_admin.vue'
import Home_taskforce from '../views/Home_taskforce.vue'
import Home_accreditor from '../views/Home_accreditor.vue'
import Dashboard from '../views/dashboard_admin.vue'
import Program_area from '../views/program_area.vue'
<<<<<<< HEAD
import Program_area_taskforce from '../views/program_area_taskforce.vue'
import Program_parameter from '../views/program_parameter.vue'
import Program_parameter_taskforce from '../views/program_parameter_taskforce.vue'
import Public_folder_admin from '../views/public_folder_admin.vue'
import Public_folder_taskforce from '../views/public_folder_taskforce.vue'
import Taskforce_members from '../views/taskforce_members.vue'
import Office_admin from '../views/office_admin.vue'


=======
import Program_parameter from '../views/program_parameter.vue'
import Public_folder_admin from '../views/public_folder_admin.vue'
import Office_admin from '../views/office_admin.vue'

>>>>>>> 0e825f2 (Adding Program)
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
<<<<<<< HEAD
    path: '/program_area_taskforce',
    name: 'Program Area Taskforce',
    component: Program_area_taskforce
  },
  {
=======
>>>>>>> 0e825f2 (Adding Program)
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
<<<<<<< HEAD
  {
    path: '/program_parameter_taskforce',
    name: 'Program Parameter Taskforce',
    component: Program_parameter_taskforce
  },
=======

>>>>>>> 0e825f2 (Adding Program)
  {
    path: '/public_folder',
    name: 'Public folder',
    component: Public_folder_admin
  },

  {
<<<<<<< HEAD
    path: '/public_folder_taskforce',
    name: 'Public folder',
    component: Public_folder_taskforce
  },

  {
=======
>>>>>>> 0e825f2 (Adding Program)
    path: '/home_accreditor',
    name: 'Home accreditor',
    component: Home_accreditor
  },

  {
<<<<<<< HEAD
    path: '/taskforce_members',
    name: 'Taskforce Members',
    component: Taskforce_members
  },

  {
=======
>>>>>>> 0e825f2 (Adding Program)
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
