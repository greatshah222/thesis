import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import Login from '../components/login/Login'
import Singup from '../components/login/signup'
import Forum from '../components/forum/forum'
import Logout from '../components/login/Logout'
import Read from '../components/forum/read'
import Create from '../components/forum/create'


const routes = [
    { path: '/thesis_new/public/try/flogin', component: Login },
    { path: '/thesis_new/public/try/flogout', component: Logout },
    { path: '/thesis_new/public/try/fsignup', component: Singup },
    { path: '/thesis_new/public/try/forum', component: Forum , name:'forum'},
    { path: '/thesis_new/public/try/question/:slug', component: Read , name:'read'},
    { path: '/thesis_new/public/try/ask', component: Create},

]
const router = new VueRouter({
    routes, // short for `routes: routes`,
    hashbang : false,
    mode : 'history'
})
export default router