<!-- SHOPPING-CART-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
    <div class="container">	
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping-cart">
                    <!-- Nav tabs -->
                    <ul class="cart-page-menu nav row clearfix mb-30">
                        <li><a class="active" href="#shopping-cart" data-bs-toggle="tab">shopping cart</a></li>
                        <li><a>check out</a></li>
                        <li><a>order complete</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- shopping-cart start -->
                        <div class="tab-pane active" id="shopping-cart">
                            <form action="#">
                                <div class="shop-cart-table">
                                    <div class="table-content table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Total</th>
                                                    <th class="product-remove">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($totalProducts as $totalProduct)
                                                <tr id="columnproduct">
                                                    <td class="product-thumbnail  text-left">
                                                        <!-- Single-product start -->
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="single-product.html"><img src="{{asset('img/images_site/270x270/'.$totalProduct->product->pp->src)}}" alt="" /></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <h4 class="post-title"><a class="text-light-black" href="#">{{$totalProduct->product->name}}</a></h4>
                                                                <p class="mb-0">Size :     {{$totalProduct->product->size}}</p>
                                                            </div>
                                                        </div>
                                                        <!-- Single-product end -->												
                                                    </td>
                                                    <td id="priceProduct" class="product-price">${{$totalProduct->product->price}}</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="2" name="qtybutton" id="qtty" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td id="total_article" class="product-subtotal">$112.00</td>
                                                    <td class="product-remove">
                                                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="customer-login mt-30">
                                            <h4 class="title-1 title-border text-uppercase">coupon discount</h4>
                                            <p class="text-gray">Enter your coupon code if you have one!</p>
                                            <input type="text" placeholder="Enter your code here.">
                                            <button type="submit" data-text="apply coupon" class="button-one submit-button mt-15">apply coupon</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="customer-login payment-details mt-30">
                                            <h4 class="title-1 title-border text-uppercase">payment details</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">Cart Subtotal</td>
                                                        <td class="text-end">$155.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Cart Subtotal</td>
                                                        <td class="text-end">$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Vat</td>
                                                        <td class="text-end">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Order Total</td>
                                                        <td class="text-end">$170.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>		
                        </div>
                        <!-- shopping-cart end -->
                        <!-- check-out end -->
                    </div>
                    <button type="submit" data-text="proceed-checkout" class="button-one submit-button mt-15">PROCEED CHECK OUT</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPPING-CART-AREA END -->