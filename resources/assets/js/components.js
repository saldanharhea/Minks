/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('admin-login', require('./components/authentication/admin-login'));

Vue.component('admin-add-partner', require('./components/admin/partner/add-new-partner'));

Vue.component('admin-home', require('./components/dashboard/Home'));

Vue.component('admin-hello', require('./components/dashboard/Hello'));

Vue.component('admin-app', require('./components/dashboard/App'));