<template>
        <div>
           <ul class="cart_items_list" v-for="cart, index in carts">
                <!-- Cart Item -->                                  
                <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start" style="width: 50%;">
                    <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                        <div><a class="btn btn-danger listbuttonremove" id="" href="#" v-on:click="removeCart(cart.id);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                        <div><div class="product_image"><img :src="'images/'+cart.product.image" alt=""></div></div>
                        <div class="product_name_container">
                            <div class="product_name"><a href="#">{{cart.product.name}}</a></div>
                            <div class="product_text">Second line for additional info</div>
                        </div>
                    </div>
                    <div class="product_price product_text">{{cart.product.price}}</div>
                </li>
               <!-- Cart Item -->
           </ul>
        </div>   
</template>

<script>
    import axios from 'axios';

    export default {
        data: function() {
           return {
              carts: window.carts
           }
        },
        mounted() {
           //console.log(window.carts);
        },
        methods: {
           removeCart(id) {
             event.preventDefault();

             var app = this;
             axios
              .post('/removeone', {id: id})
                .then(function (resp) {
                    console.log(resp.data);
                    app.carts = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not delete cart");
                });            
           },
        },
    }
</script>
