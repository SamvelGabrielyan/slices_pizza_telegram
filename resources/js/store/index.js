import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        basketProducts: [],
        basketCount: 0,
        totalPrice: 0,
        storageProducts: [],
        allPizzas: []
    },
    getters: {
        basketProducts(state) {
            return state.basketProducts;
        },
        basketCount(state) {
            return state.basketCount;
        },
        totalPrice(state) {
            return state.totalPrice;
        },
        storageProducts(state) {
            return state.storageProducts;
        },
        allPizzas(state) {
            return state.allPizzas
        }
    },
    mutations: {
        GET_BASKET_PRODUCTS(state, {type, items}) {
            state['basketProducts'] = items;
            state['basketCount'] = items != null ? items.length : 0;
        },
        GET_TOTAL_PRICE(state, {type, items}) {
            state['totalPrice'] = items;
        },
        GET_ALL_PIZZAS(state, {type, items}) {
            state['allPizzas'] = items;
        },
    },
    actions: {
        getAllBasketProducts({commit}) {
            var basketProducts = JSON.parse(localStorage.getItem('basketProducts'));
            this.state.storageProducts = basketProducts;
            this.dispatch('getTotalPrice');
            commit('GET_BASKET_PRODUCTS', {items: basketProducts});
        },
        deleteBasketProduct({commit}, option) {
            var basketProducts = JSON.parse(localStorage.getItem('basketProducts'));
            this.state.storageProducts = basketProducts;
            for (var i = 0; i < basketProducts.length; i++) {
                if (basketProducts[i].product_id === option.id) {
                    basketProducts.splice(i, 1);
                }
            }
            localStorage.setItem('basketProducts', JSON.stringify(basketProducts));
            this.dispatch('getTotalPrice');
            commit('GET_BASKET_PRODUCTS', {items: basketProducts});
        },
        updateCount({commit}, option) {
            var basketProducts = JSON.parse(localStorage.getItem('basketProducts'));
            this.state.storageProducts = basketProducts;
            for (var i = 0; i < basketProducts.length; i++) {
                if (basketProducts[i].product_id === option.id) {
                    basketProducts[i].count = option.count;
                    basketProducts[i].sumPrice = option.count * parseInt(basketProducts[i].price);
                }
            }
            localStorage.setItem('basketProducts', JSON.stringify(basketProducts));
            this.dispatch('getTotalPrice');
            commit('GET_BASKET_PRODUCTS', {items: basketProducts});
        },
        getTotalPrice({commit}) {
            var totalPrice = 0;
            var basketProducts = JSON.parse(localStorage.getItem('basketProducts'));
            this.state.storageProducts = basketProducts;
            for (var i = 0; i < basketProducts.length; i++) {
                totalPrice += basketProducts[i].count * basketProducts[i].price;
            }
            commit('GET_TOTAL_PRICE', {items: totalPrice});
        },
        getAllPizzas({commit}) {
            axios.post('/get-all-pizzas', {
            }).then((res) => {
                const allPizzas = res.data;
                commit('GET_ALL_PIZZAS', {items: allPizzas});
            })

        },
    }
});


export default store;
