<template>
    <div class="section products-section">
        <div class="container">

            <div class="section-title-wrap section-header text-center">
                <h5 class="custom-primary">Trending</h5>
                <h2 class="title">Our Customers' Top Picks</h2>
                <p class="subtitle">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy
                </p>
            </div>

            <div class="product-slider">

                <!-- Product Start -->
                <div class="product" v-for="pizza in $store.state.allPizzas.pizzas" :id="pizza.id">
                    <p class="product-thumb">
                        <img :src="pizza.pic_sm" alt="menu item"/>
                    </p>
                    <div class="product-body">
                        <div class="product-desc">
                            <h4><p>{{pizza.name}}</p></h4>
                            <p>{{pizza.short_desc}}</p>
                            <p class="product-price">{{pizza.price}}$</p>
                        </div>
                        <div class="product-controls">
                            <order-button :order="pizza"></order-button>
                        </div>
                    </div>
                </div>
                <!-- Product End -->

            </div>

            <div class="ct-arrows centered-arrows">
                <i class="slider-prev fas fa-arrow-left slick-arrow"></i>
                <i class="slider-next fas fa-arrow-right slick-arrow"></i>
            </div>

        </div>
    </div>
</template>

<script>
    import orderButton from "./OrderButtonComponent.vue"

    export default {
        data() {
            return {}
        },
        components: {
            "order-button": orderButton
        },
        methods: {},
        mounted() {
        }
    }
</script>
