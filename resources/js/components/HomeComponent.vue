<template>
    <div class="section">

        <general-pizza-component></general-pizza-component>

        <!-- About us start -->
        <about-us-component></about-us-component>
        <!-- About us End -->

        <!-- Categories Start -->
        <category-component></category-component>
        <!-- Categories End -->

        <!-- Products Start -->
        <customers-pizza-component></customers-pizza-component>
        <!-- Products End -->

    </div>
</template>

<script>

    import GeneralPizzaComponent from './GeneralPizzaComponent';
    import AboutUsComponent from './AboutUsComponent';
    import CategoryComponent from './CategoryComponent';
    import CustomersPizzaComponent from './CustomersPizzaComponent';
    import {mapActions} from "vuex";

    export default {
        components: {
            GeneralPizzaComponent,
            AboutUsComponent,
            CategoryComponent,
            CustomersPizzaComponent
        },
        data() {
            return {}
        },
        methods: {
            ...mapActions(['getAllPizzas']),
        },
        mounted() {
            this.getAllPizzas()
        }
    }
</script>
