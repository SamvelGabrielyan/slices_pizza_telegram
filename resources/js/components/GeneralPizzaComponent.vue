<template>
    <!-- Banner Start -->
    <div class="banner banner-1 bg-cover">

        <div class="imgs-wrapper">
            <img :src="'temp/assets/img/veg/11.webp'" alt="veg" class="d-none d-lg-block">
        </div>

        <div class="banner-slider">

            <div class="banner-item" v-for="pizza in $store.state.allPizzas.pizzas" :id="pizza.id">
                <div class="banner-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <h1 class="title">{{pizza.name}}</h1>
                                <h4>{{pizza.short_desc}}</h4>
                                <p class="subtitle">
                                    {{pizza.long_desc}}
                                </p>
                                <div class="banner-icons-wrapper">
                                    <div class="banner-icon">
                                        <i class="flaticon-calories"></i>
                                        <div class="banner-icon-body">
                                            <h5>480</h5>
                                            <span>Calories</span>
                                        </div>
                                    </div>
                                    <div class="banner-icon">
                                        <i class="flaticon-cheese"></i>
                                        <div class="banner-icon-body">
                                            <h5>120g</h5>
                                            <span>Mozarella</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-controls">
                                    <order-button :order="pizza"></order-button>
                                    <h4>${{pizza.price}}</h4>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <img :src="pizza.pic" alt="pizza">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="banner-slider-nav">
            <div class="container">

                <!-- Arrow -->
                <i class="slider-prev fas fa-arrow-left slick-arrow"></i>

                <div class="banner-slider-nav-inner">

                    <div class="banner-nav-item" v-for="pizza in $store.state.allPizzas.pizzas" :id="pizza.id">
                        <div class="banner-nav-item-inner">
                            <img :src="pizza.pic_sm" alt="pizza">
                            <div class="banner-nav-item-body">
                                <h5>{{pizza.name}}</h5>
                                <span>${{pizza.price}}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Arrow -->
                <i class="slider-next fas fa-arrow-right slick-arrow"></i>

            </div>
        </div>

    </div>
    <!-- Banner End -->
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
