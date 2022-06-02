<!-- SHOPPING-CART-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
    <div class="container">	
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping-cart" >
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
                            <div>
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
                                                                <a href="product/{{$totalProduct->product->id}}"><img src="{{asset('img/images_site/270x270/'.$totalProduct->product->pp->src)}}" alt="" /></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <h4 class="post-title"><a class="text-light-black" href="product/">{{$totalProduct->product->name}}</a></h4>
                                                                <p class="mb-0">Size :     {{$totalProduct->product->size}}</p>
                                                            </div>
                                                        </div>
                                                        <!-- Single-product end -->												
                                                    </td>
                                                    <td id="priceProduct" class="product-price">${{$totalProduct->product->price}}</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" disabled value="{{$totalProduct->amount}}" id="qtty" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td id="total_article" class="product-subtotal">$112.00</td>
                                                    <td class="product-remove">
                                                        <form action="cartProduct/{{$totalProduct->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="#"><button type="submit"><i class="zmdi zmdi-close"></i></button></a>
                                                        </form>
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
                                            <input id="coupon" type="text" placeholder="Enter your code here.">
                                            <button id="couponbtn" type="submit" data-text="apply coupon" class="button-one submit-button mt-15">apply coupon</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="customer-login payment-details mt-30">
                                            <h4 class="title-1 title-border text-uppercase">payment details</h4>
                                            <table>
                                                <tbody id="countCart">
                                                    <tr>
                                                        <td class="text-left">Cart Subtotal</td>
                                                        <td class="text-end">$155.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Vat</td>
                                                        <td class="text-end">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Order Total</td>
                                                        <td class="text-end justify-content-end d-flex align-items-center"><input style="color: #c87065; font-weight:bold; width:auto; text-align: right" class="bg-transparent m-0 p-0" type="number" disabled step="0.01">$</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                        </div>
                        <!-- shopping-cart end -->
                        <!-- check-out end -->
                    </div>
                    <form action="orderProduct" method="POST">
                        @csrf
                        <input id="couponValidate" hidden name="reduc">
                        <input type="text" name="amount" hidden id="amoutArray">
                        <button type="submit" data-text="proceed-checkout" class="button-one submit-button mt-15">PROCEED CHECK OUT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPPING-CART-AREA END -->