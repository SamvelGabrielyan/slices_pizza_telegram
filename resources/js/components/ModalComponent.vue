<template>
    <div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div v-if="validationErrors">
                            <ul class="alert alert-danger">
                                <li v-for="(value, key, index) in validationErrors">{{ value[0] }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body">

                        <section class="section">
                            <div class="container">

                                <form method="post">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="ct-notice-content">
                                                <div class="row">
                                                    <div class="col-xl-6 form-group">
                                                        <label>Email Address</label>
                                                        <input type="text" class="form-control" name="login-email"
                                                               placeholder="Email Address" value="">
                                                    </div>
                                                    <div class="col-xl-6 form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="login-pass"
                                                               placeholder="Password" value="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="rememberMe">
                                                            <label class="custom-control-label" for="rememberMe">Remember
                                                                Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn-custom shadow-none btn-sm"
                                                                name="button">Login
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Buyer Info -->
                                            <h4>Order Details</h4>
                                            <div class="row">
                                                <div class="form-group col-xl-12">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Name"
                                                           name="name" class="form-control" required="" v-model="name">
                                                </div>
                                                <div class="form-group col-xl-12">
                                                    <label>Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" placeholder="Email Address" name="email"
                                                           class="form-control"
                                                           v-model="email" required="">
                                                </div>
                                                <div class="form-group col-xl-12 mb-0">
                                                    <label>Order Comment <span class="text-danger">*</span></label>
                                                    <textarea name="comment" required rows="5" v-model="comment"
                                                              class="form-control"
                                                              placeholder="Order Comment"></textarea>
                                                </div>
                                                <div class="form-group col-xl-8">
                                                    <label></label>
                                                    <button type="button" @click="getOrder()"
                                                            class="btn-custom primary btn-block">Place Order
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- /Buyer Info -->

                                        </div>
                                        <div class="col-xl-5 checkout-billing">
                                            <!-- Order Details Start -->
                                            <table class="ct-responsive-table">
                                                <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Qunantity</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr v-for="order in this.$store.state.storageProducts">
                                                    <td data-title="Product">
                                                        <div class="cart-product-wrapper">
                                                            <div class="cart-product-body">
                                                                <h6><p style="cursor: pointer">{{order.name}}</p></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-title="Quantity">x{{order.count}}</td>
                                                    <td data-title="Total"><strong>{{order.sumPrice}}$</strong></td>
                                                </tr>
                                                <tr class="total">
                                                    <td>
                                                        <h6 class="mb-0">Grand Total</h6>
                                                    </td>
                                                    <td></td>
                                                    <td><strong>{{this.$store.getters.totalPrice}}$</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <!-- Order Details End -->

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </section>
                        <!-- Checkout End -->

                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn-custom primary btn-block" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios"
    import Swal from 'sweetalert2'

    export default {
        data() {
            return {
                email: '',
                name: '',
                comment: '',
                validationErrors: '',
                errors: [],
            }
        },
        components: {
            Swal
        },
        methods: {
            getOrder() {
                axios.post('/order', {
                    email: this.email,
                    name: this.name,
                    comment: this.comment,
                    sum: this.$store.getters.totalPrice,
                    products: localStorage.getItem('basketProducts')
                }).then((res) => {
                    this.alertMessage();
                    this.email = '';
                    this.name = '';
                    this.comment = '';
                    localStorage.removeItem('basketProducts');
                    location.reload();
                }).catch((error) => {
                    if (error.response.status == 422) {
                        this.validationErrors = error.response.data.errors;
                    }
                })
            },
            alertMessage() {
                Swal.fire("Congratulations!", "Your order is accepted!", "success")
            }
        },
    }
</script>
