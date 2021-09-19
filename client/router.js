import Vue from 'vue'
import Router from 'vue-router'
import VueScrollTo from 'vue-scrollto'
import { scrollBehavior } from '~/utils'
Vue.use(VueScrollTo)
Vue.use(Router)

const page = path => () => import(`~/pages/${path}`).then(m => m.default || m)

const routes = [

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  // { path: '/register', name: 'register', component: page('auth/register.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },
  { path: '/', name: 'admin', component: page('admin.vue') },
  { path: '/time-sheet', name: 'timesheet', component: page('time-sheet/index.vue') },
  { path: '/create-absence', name: 'createabsence', component: page('create-absence/index.vue') },
  { path: '/leave', name: 'leave', component: page('leave/index.vue') },
  { path: '/center', name: 'center', component: page('center') },
  { path: '/supcenter', name: 'supcenter', component: page('supervisor/center') },
  { path: '/apply-leave', name: 'applyleaves', component: page ('apply-leave/index.vue') },
  { path: '/leavelist', name: 'leavelists', component: page ('leavelist/index.vue') },
  { path: '/leave-approval', name: 'leaveapproves', component: page ('leave-approval/index.vue') },

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
