import Vue from 'vue'
import Router from 'vue-router'
import jquery from 'jquery'
import Home from '@/components/Home'
import Login from '@/components/Login'
import Create from '@/components/Create'
import List from '@/components/List'


Vue.use(Router);

export default new Router({
  routes: [
    {path: '/', name: 'Home', component: Home},
    {path: '/list', name: 'Birthday List', component: List},
    {path: '/login', name: 'Login', component: Login},
    {path: '/create', name: 'Create', component: Create},
  ]
})
