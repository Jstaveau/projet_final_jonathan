<!-- ORDER-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
    <div class="container">	
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping-cart">
                    <!-- Nav tabs -->
                    <ul class="cart-page-menu nav row clearfix mb-30">
                        <li><a>shopping cart</a></li>
                        <li><a>check out</a></li>
                        <li><a class="active">order complete</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- order-complete start -->
                        <div class="tab-pane active" id="order-complete">
                            <form action="#">
                                <div class="thank-recieve bg-white mb-30">
                                    <p>Thank you. Your order has been received.</p>
                                </div>
                                <div class="order-info bg-white text-center clearfix mb-30">
                                    <div class="single-order-info">
                                        <h4 class="title-1 text-uppercase text-light-black mb-0">order no</h4>
                                        <p class="text-uppercase text-light-black mb-0"><strong>m {{$order->command_number}}</strong></p>
                                    </div>
                                    <div class="single-order-info">
                                        <h4 class="title-1 text-uppercase text-light-black mb-0">Date</h4>
                                        <p class="text-uppercase text-light-black mb-0"><strong>{{$order->updated_at->format('F d, Y')}}</strong></p>
                                    </div>
                                    <div class="single-order-info">
                                        <h4 class="title-1 text-uppercase text-light-black mb-0">Total</h4>
                                        <p class="text-uppercase text-light-black mb-0"><strong>$ {{number_format($order->total,2)}}</strong></p>
                                    </div>
                                    <div class="single-order-info">
                                        <h4 class="title-1 text-uppercase text-light-black mb-0">payment method</h4>
                                        <p class="text-uppercase text-light-black mb-0"><a href="#"><strong>check payment</strong></a></p>
                                    </div>
                                </div>
                                <div class="shop-cart-table check-out-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="our-order payment-details pr-20">
                                                <h4 class="title-1 title-border text-uppercase mb-30">our order</h4>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th><strong>Product</strong></th>
                                                            <th class="text-end"><strong>Total</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order_products as $product)
                                                            <tr>
                                                                <td>{{$product->product->name.' (Qty : '.$product->amount.')'}}</td>
                                                                <td class="text-end">${{number_format(($product->product->price/121 * 100) * $product->amount, 2)}}</td>
                                                            </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td>Vat</td>
                                                            <td class="text-end">${{number_format(($order->total/121) * 21, 2)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coupon</td>
                                                            <td class="text-end">${{number_format($order->total - $total, 2)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order Total</td>
                                                            <td class="text-end">${{number_format($order->total, 2)}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>										
                        </div>
                        <!-- order-complete end -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ORDER-AREA END -->