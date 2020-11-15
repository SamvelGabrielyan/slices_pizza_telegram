<template>
    <div class="section section-padding menu-v2">
        <div class="container">

            <!-- Category Start -->
            <div class="menu-category dark-overlay dark-overlay-2"
                 :style="{'background-image': 'url('+'temp/assets/img/categories-lg/1.webp'+')'}">
                <h3>Pizzas</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard</p>
            </div>
            <div class="row">

                <!-- Product Start -->
                <div class="col-lg-4 col-md-6" v-for="pizza in $store.state.allPizzas.pizzas" :id="pizza.id">
                    <div class="product">
                        <p class="product-thumb"><img :src="pizza.pic" alt="menu item"/></p>
                        <div class="product-body">
                            <div class="product-desc">
                                <h4><p>{{pizza.name}}</p></h4>
                                <p>{{pizza.short_desc}}</p>
                            </div>
                            <div class="product-controls">
                                <p class="product-price">{{pizza.price}}$</p>
                                <order-button :order="pizza"></order-button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product End -->
            </div>
            <!-- Category End -->
        </div>
    </div>
</template>

<script>
    import orderButton from "./OrderButtonComponent.vue"
    import {mapActions, mapGetters} from "vuex";

    export default {
        data() {
            return {}
        },
        components: {
            "order-button": orderButton
        },
        // props: ['pizzas'],
        methods: {
            ...mapActions(['getAllPizzas']),
        },
        created() {
        }
    }
</script>
