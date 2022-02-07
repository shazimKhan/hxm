import Vue from 'vue'
import Router from 'vue-router'
import VueScrollTo from 'vue-scrollto'
import { scrollBehavior } from '~/utils'

// import VueToast from 'vue-toast-notification';
// // Import any of available themes
// import 'vue-toast-notification/dist/theme-default.css';
// import 'vue-toast-notification/dist/theme-sugar.css';

import 'font-awesome/css/font-awesome.min.css'
import Vuetify from 'vuetify/lib';

Vue.use(Vuetify);

export default new Vuetify({
  icons: {
    iconfont: 'mdiSvg' || 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
  },
});

// Vue.use(VueToast, {
//   // One of options
//   position: 'top',
//   message: '',
//   type: 'default',
//   position: 'top-right',
//   duration: 2000,
//   queue: true
// })

Vue.use(VueScrollTo)
Vue.use(Router)

const page = path => () => import(`~/pages/${path}`).then(m => m.default || m)

const routes = [

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },
  { path: '/home', name: 'home', component: page('admin.vue') },
  { path: '/time-sheet', name: 'timesheet', component: page('time-sheet/index.vue') },
  { path: '/create-absence', name: 'createabsence', component: page('create-absence/index.vue') },
  { path: '/leave', name: 'leave', component: page('leave/index.vue') },
  { path: '/center', name: 'center', component: page('admin/index.vue') },
  { path: '/supcenter', name: 'supcenter', component: page('supervisor/center') },
  { path: '/apply-leave', name: 'applyleaves', component: page('apply-leave/index.vue') },
  { path: '/leavelist', name: 'leavelists', component: page('leavelist/index.vue') },
  { path: '/leave-approval', name: 'leaveapproves', component: page('leave-approval/index.vue') },
  { path: '/employee', name: 'employee', component: page('employee/index.vue') },
  { path: '/workschedule', name: 'workschedule', component: page('workschedule/index.vue') },
  { path: '/leavemanagment', name: 'leavemanagement', component: page('leavemanagment/index.vue') },
  { path: '/admincenter', name: 'admincenter', component: page('admincenter/index.vue') },
  { path: '/reporting', name: 'reporting', component: page('reporting/index.vue') },
  { path: '/tabular-reports', name: 'tabular-reports', component: page('tabular-reports/index.vue') },
  { path: '/graphical-reports', name: 'graphical-reports', component: page('graphical-reports/index.vue') }, 
  { path: '/tabular-selected', name: 'tabular-selected', component: page('tabular-selected/index.vue') },
  { path: '/graphical-selected', name: 'graphical-selected', component: page('graphical-selected/index.vue') },

  {
    path: '/admin',
    name: 'admin',
    component: page('admin/index.vue'),
    children: [
      { path: 'importTable', name: 'admin.importTable', component: page('admin/importTable.vue') },
      { path: 'importData', name: 'admin.importData', component: page('admin/importData.vue') }
    ]
  },
  
  {
    path: '/settings',
    component:
    page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ]

  },

  {
    path: '/supervisor',
    component: page('supervisor/index.vue'),
    children:
    [
      { path: '', redirect: { name: 'supervisor.index' } },
      { path: 'index', name: 'supervisor.index', component: page('supervisor/index.vue') }
    ]
  }
]

export function createRouter () {
  return new Router({
    routes,
    scrollBehavior,
    mode: 'history'
  })
}
