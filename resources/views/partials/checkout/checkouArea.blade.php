<!-- CHECKOUT-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
    <div class="container">	
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping-cart">
                    <!-- Nav tabs -->
                    <ul class="cart-page-menu nav row clearfix mb-30">
                        <li><a>shopping cart</a></li>
                        <li><a class="active" href="#check-out" data-bs-toggle="tab">check out</a></li>
                        <li><a>order complete</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- check-out start -->
                        <div class="tab-pane active" id="check-out">
                            @include('flash')
                            <form action="order/{{$order->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="shop-cart-table check-out-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="billing-details pr-20">
                                                <h4 class="title-1 title-border text-uppercase mb-30">billing details</h4>
                                                <input required name="name" value="{{$billing->name}}" type="text" placeholder="Your name here...">
                                        <input required name="email" value="{{$billing->email}}" type="text" placeholder="Email address here...">
                                        <input name="phone" value="{{$billing->phone}}" type="text" placeholder="Phone here...">
                                        <input name="company_name" value="{{$billing->company_name}}" type="text" placeholder="Company neme here...">
                                        <select required name="country" class="custom-select mb-15">
                                            <option value='Bangladesh' {{$billing->country == 'Bangladesh' ? 'selected' : ''}}>Bangladesh</option>
                                            <option value='United States' {{$billing->country == 'United States' ? 'selected' : ''}}>United States</option>
                                            <option value='united Kingdom' {{$billing->country == 'united Kingdom' ? 'selected' : ''}}>united Kingdom</option>
                                            <option value='Australia' {{$billing->country == 'Australia' ? 'selected' : ''}}>Australia</option>
                                            <option value='Canada' {{$billing->country == 'Canada' ? 'selected' : ''}}>Canada</option>
                                        </select>
                                        <select required name="state" class="custom-select mb-15">
                                            <option value='Dhaka' {{$billing->state == 'Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                            <option value='New york' {{$billing->state == 'New york' ? 'selected' : ''}}>New York</option>
                                            <option value='London' {{$billing->state == 'London' ? 'selected' : ''}}>London</option>
                                            <option value='Melbourne' {{$billing->state == 'Melbourne' ? 'selected' : ''}}>Melbourne</option>
                                            <option value='Ottawa' {{$billing->state == 'Ottawa' ? 'selected' : ''}}>Ottawa</option>
                                        </select>
                                        <select required name="city" class="custom-select mb-15">
                                            <option value='Dhaka' {{$billing->city == 'Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                            <option value='New york' {{$billing->city == 'New york' ? 'selected' : ''}}>New York</option>
                                            <option value='London' {{$billing->city == 'London' ? 'selected' : ''}}>London</option>
                                            <option value='Melbourne' {{$billing->city == 'Melbourne' ? 'selected' : ''}}>Melbourne</option>
                                            <option value='Ottawa' {{$billing->city == 'Ottawa' ? 'selected' : ''}}>Ottawa</option>
                                        </select>
                                        <textarea required name="address" placeholder="Your address here..." class="custom-textarea">{{$billing->address}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="our-order payment-details mt-60 pr-20">
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
                                                <button class="button-one submit-button mt-15" data-text="place order" type="submit">order</button>			
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>											
                        </div>
                        <!-- check-out end -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- CHECKOUT-AREA END -->