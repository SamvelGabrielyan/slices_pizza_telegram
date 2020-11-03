<template>
    <div>
        <!-- Preloader End -->

        <modal-component></modal-component>

        <!-- Cart Sidebar Start -->
        <div class="cart-sidebar-wrapper">
            <aside class="cart-sidebar">
                <div class="cart-sidebar-header">
                    <h3>Your Cart</h3>
                    <div class="close-btn cart-trigger close-dark">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="cart-sidebar-body">
                    <div class="cart-sidebar-scroll">
                        <div class="cart-sidebar-item" v-for="product in $store.getters.basketProducts"
                             :id="product.product_id">
                            <div class="media">
                                <p><img :src="product.pic" alt="product"></p>
                                <div class="media-body">
                                    <h5><p :title="product.name">{{product.name}}</p></h5>
                                    <vue-numeric-input @change="getValue(product.product_id)"
                                                       :ref="'value'+product.product_id"
                                                       v-model="count = product.count"
                                                       :min="1" :max="100" :step="1"
                                                       :align="'center'">
                                    </vue-numeric-input>
                                    <span>Price: {{product.price}}$</span>
                                </div>
                            </div>
                            <div class="cart-sidebar-price">
                                {{product.sumPrice}}$
                            </div>
                            <div class="close-btn" @click="deleteProduct(product.product_id)">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-sidebar-footer">
                    <h4>Total: <span>{{this.$store.getters.totalPrice}}$</span></h4>
                    <p style="cursor: pointer" data-toggle="modal" data-target="#myModal" v-if="this.$store.getters.basketCount > 0" class="btn-custom">
                        Checkout</p>
                </div>
            </aside>
            <div class="cart-sidebar-overlay cart-trigger">
            </div>
        </div>
        <!-- Cart Sidebar End -->

        <!-- Aside (Mobile Navigation) -->
        <aside class="main-aside">
            <a class="navbar-brand" href="/"> <img :src="'temp/assets/img/logo.png'" alt="logo"> </a>

            <div class="aside-scroll">
                <ul>
                    <li class="menu-item">
                        <a href="/">Home Page</a>
                    </li>
                    <li class="menu-item">
                        <a href="/menu">Menu</a>
                    </li>
                </ul>

            </div>

        </aside>
        <div class="aside-overlay aside-trigger"></div>

        <!-- Header Start -->
        <header class="main-header header-1 header-absolute">
            <div class="container">
                <nav class="navbar">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/"> <img :src="'temp/assets/img/logo.png'" alt="logo"> </a>
                    <!-- Menu -->
                    <ul class="navbar-nav">
                        <li class="menu-item menu-item-has-children">
                            <!--<a href="/">Home Page</a>-->
                            <router-link to="/">Home Page</router-link>
                        </li>
                        <li class="menu-item menu-item-has-children mega-menu-wrapper">
                            <!--<a href="/menu">Menu</a>-->
                            <router-link to="/menu">Menu</router-link>
                        </li>
                    </ul>

                    <div class="header-controls">
                        <ul class="header-controls-inner">
                            <li class="cart-dropdown-wrapper cart-trigger">
                                <span class="cart-item-count">{{this.$store.getters.basketCount}}</span>
                                <i class="flaticon-shopping-bag"></i>
                            </li>
                        </ul>
                        <!-- Toggler -->
                        <div class="aside-toggler aside-trigger">

                        </div>
                    </div>

                </nav>
            </div>

        </header>
        <!-- Header End -->
    </div>
</template>

<script>
    import VueNumericInput from 'vue-numeric-input'
    import ModalComponent from './ModalComponent'

    export default {
        components: {
            VueNumericInput,
            ModalComponent
        },
        data() {
            return {
                count: '',
            }
        },
        methods: {

            deleteProduct(id) {
                this.$store.dispatch('deleteBasketProduct', {id})
            },
            getValue(id) {
                var ref = 'value' + id;
                setTimeout(() => {
                    var count = this.$refs[ref][0].value;
                    this.$store.dispatch('updateCount', {id, count})
                }, 100);
            },
        },
        watch: {
            count: function (val) {
                var id = val.product_id;
                var count = val.count;
                this.$store.dispatch('updateCount', {id, count})
            },
        },
        mounted() {
            this.$store.dispatch('getAllBasketProducts')
        },
    }
</script>
