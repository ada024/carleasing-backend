require('./bootstrap');
import { createApp } from 'vue'
import router from './router'
import store from './store'

createApp({}).use(store).use(router).mount('#app')

//require('alpinejs');

import  VueRouter from 'vue-router'
import  {routes} from './routes'


/*
const router = new VueRouter({
    routes, // short for `routes: routes`,
    mode: 'history'
})
*/
//window.Vue = require('vue')
//Vue.use(VueRouter).use('store')

/*
const app = new Vue({
    el: '#app',
    router,
});
*/
