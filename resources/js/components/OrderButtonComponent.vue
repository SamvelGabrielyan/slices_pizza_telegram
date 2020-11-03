<template>
    <p style="cursor: pointer" @click="addToBasket(order)" class="order-item btn-custom btn-sm shadow-none">Order
        <i class="fas fa-shopping-cart"></i></p>
</template>

<script>
    import Swal from 'sweetalert2'

    export default {
        data() {
            return {}
        },
        components: {
            Swal
        },
        props: ['order'],
        methods: {
            addToBasket(order) {
                order = {
                    'product_id': order.id,
                    'count': 1,
                    'pic': order.pic,
                    'price': order.price,
                    'name': order.name,
                    'sumPrice' : order.price
                };
                var basketProducts = JSON.parse(localStorage.getItem('basketProducts'));
                if (basketProducts) {
                    for (var i = 0; i < basketProducts.length; i++) {
                        if (order.product_id == basketProducts[i]['product_id']) {
                            return;
                        }
                    }
                } else {
                    var basketProducts = [];
                }
                basketProducts.push(order);
                this.alertMessage();
                localStorage.setItem('basketProducts', JSON.stringify(basketProducts));
                this.$store.dispatch('getAllBasketProducts')
            },
            alertMessage() {
                Swal.fire("Success!", "Your order in the basket!", "success")
            }
        },
        mounted() {
        }
    }
</script>
