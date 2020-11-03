import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

 const home = Vue.component('home-component', require('./components/HomeComponent.vue').default);
 const menu = Vue.component('menu-component', require('./components/PizzaMenuComponent.vue').default);

export default new VueRouter({
    routes: [
        {
            name: 'Home',
            path: '/',
            component: home
        },
        {
            name: 'Menu',
            path: '/menu',
            component: menu
        },

    ],
    mode: 'history'
})
