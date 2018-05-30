
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/**
require('./bootstrap');

window.Vue = require('vue');


require('./components');

const app = new Vue({
    el: '#app'
});

**/
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueFormWizard from 'vue-form-wizard'
import VueClipboards from 'vue-clipboards'

Vue.use(VueClipboards)
Vue.use(VueFormWizard)
Vue.use(VueRouter)
import App from './components/App'
import Doc from './components/my_layouts/documentation/doc-api'
import Dash from './components/my_layouts/dashboard/dashboard-main'

import Profile from './components/my_layouts/profile/profile'
import Users from './components/my_layouts/profile/user-table'
import Form from './components/my_layouts/forms/addCustomer-form'
import Edits from './components/my_layouts/profile/edit'


import Dashb from './components/newLayouts/adminLayouts/dashboard/dashboardMain'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dash
        },
        {
            path: '/doc',
            name: 'doc',
            component: Doc,
        },

        {
            path: '/add',
            name: 'add',
            component: Form,
        },
        {
            path: '/user',
            name: 'user',
            component: Users,
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
        },
        {
            path: '/edit',
            name: 'edit',
            component: Edits,
        },

        {
            path: '/card',
            name: 'card',
            component: Dashb,
        },
        
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});



