/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import store from "./store";
import router from "./router";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('general-pizza-component', require('./components/GeneralPizzaComponent').default);
Vue.component('customers-pizza-component', require('./components/CustomersPizzaComponent').default);
Vue.component('category-component', require('./components/CategoryComponent').default);
Vue.component('about-us-component', require('./components/AboutUsComponent').default);
Vue.component('pizza-menu-component', require('./components/PizzaMenuComponent').default);
Vue.component('order-button-component', require('./components/OrderButtonComponent').default);
Vue.component('header-component', require('./components/HeaderComponent').default);
Vue.component('modal-component', require('./components/ModalComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
    router
});
