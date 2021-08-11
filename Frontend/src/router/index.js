import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/login.vue'
import ProgramLevel from '../views/programLevel.vue'
import Home_admin from '../views/Home_admin.vue'
import Home_taskforce from '../views/taskforce_home.vue'
import Home_accreditor from '../views/accreditor_home.vue'
import Program_parameter_accreditor from '../views/accreditor_viewParameter.vue'
import Dashboard from '../views/dashboard_admin.vue'
import Program_area from '../views/program_area.vue'
import Program_area_taskforce from '../views/taskforce_programArea.vue'
import Program_parameter from '../views/program_parameter.vue'
import Program_parameter_taskforce from '../views/taskforce_programParameter.vue'
import Public_folder_admin from '../views/public_folder_admin.vue'
import Public_folder_taskforce from '../views/taskforce_publicFolder.vue'
import Taskforce_members from '../views/taskforce_members.vue'
import Office_admin from '../views/office_admin.vue'

import Admin_ppp from '../views/admin_ppp.vue'
import Taskforce_ppp from '../views/taskforce_ppp.vue'

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
    path: '/program_area_taskforce',
    name: 'Program Area Taskforce',
    component: Program_area_taskforce
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
    path: '/program_parameter_taskforce',
    name: 'Program Parameter Taskforce',
    component: Program_parameter_taskforce
  },
  {
    path: '/public_folder',
    name: 'Public folder',
    component: Public_folder_admin
  },

  {
    path: '/public_folder_taskforce',
    name: 'Public folder',
    component: Public_folder_taskforce
  }, 

  {
    path: '/home_accreditor',
    name: 'Home accreditor',
    component: Home_accreditor
  },
  {
    path: '/Program_parameter_accreditor',
    name: 'Program Parameter',
    component: Program_parameter_accreditor
  },
  {
    path: '/admin_program_performance_profile',
    name: 'Survey List',
    component: Admin_ppp
  },
  {
    path: '/taskforce_program_performance_profile',
    name: 'Survey List',
    component: Taskforce_ppp
  },


  {
    path: '/taskforce_members',
    name: 'Taskforce Members',
    component: Taskforce_members
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
