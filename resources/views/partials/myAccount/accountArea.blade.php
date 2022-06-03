 <!-- MY-ACCOUNT-AREA START -->
<div class="my-account-area  pt-80 pb-80">
    <div class="container">	
        <div class="my-account">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group" id="accordion">
                        <div class="panel mb-2">
                            <div class="my-account-menu" >
                                <a  data-bs-toggle="collapse" href="#my-info">
                                My Personal Information
                                </a>
                            </div>
                            <div id="my-info" class="panel-collapse collapse show" data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <form class="billing-details shop-cart-table" action="user/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <img src="{{asset('img/images_site/90x100/'.$user->avatar->src)}}" alt="">
                                        <label for="pp">Change photo</label><br>
                                        <input type="file" name="file" class="custom-file-input mb-3" id="pp">
                                        <input name="name" value="{{$user->name}}" type="text" placeholder="Your name here...">
                                        <input name="email" value="{{$user->email}}" type="text" placeholder="Email address here...">
                                        <input name="phone" value="{{$user->phone}}" type="text" placeholder="Phone here...">
                                        <input name="company_name" value="{{$user->company_name}}" type="text" placeholder="Company name here...">
                                        <select name="country" class="custom-select mb-15">
                                            <option value='NULL'>Country</option>
                                            <option value='Bangladesh' {{$user->country == 'Bangladesh' ? 'selected' : ''}}>Bangladesh</option>
                                            <option value='United States' {{$user->country == 'United States' ? 'selected' : ''}}>United States</option>
                                            <option value='united Kingdom' {{$user->country == 'united Kingdom' ? 'selected' : ''}}>united Kingdom</option>
                                            <option value='Australia' {{$user->country == 'Australia' ? 'selected' : ''}}>Australia</option>
                                            <option value='Canada' {{$user->country == 'Canada' ? 'selected' : ''}}>Canada</option>
                                        </select>
                                        <select name="state" class="custom-select mb-15">
                                            <option value="NULL">State</option>
                                            <option value='Dhaka' {{$user->state == 'Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                            <option value='New york' {{$user->state == 'New york' ? 'selected' : ''}}>New York</option>
                                            <option value='London' {{$user->state == 'London' ? 'selected' : ''}}>London</option>
                                            <option value='Melbourne' {{$user->state == 'Melbourne' ? 'selected' : ''}}>Melbourne</option>
                                            <option value='Ottawa' {{$user->state == 'Ottawa' ? 'selected' : ''}}>Ottawa</option>
                                        </select>
                                        <select name="city" class="custom-select mb-15">
                                            <option value="NULL">Town / City</option>
                                            <option value='Dhaka' {{$user->city == 'Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                            <option value='New york' {{$user->city == 'New york' ? 'selected' : ''}}>New York</option>
                                            <option value='London' {{$user->city == 'London' ? 'selected' : ''}}>London</option>
                                            <option value='Melbourne' {{$user->city == 'Melbourne' ? 'selected' : ''}}>Melbourne</option>
                                            <option value='Ottawa' {{$user->city == 'Ottawa' ? 'selected' : ''}}>Ottawa</option>
                                        </select>
                                        <textarea name="address" placeholder="Your address here..." class="custom-textarea">{{$user->address}}</textarea>
                                        <button type="submit" data-text="update" class="submit-button submit-btn-2 button-one mt-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel mb-2">
                            <div class="my-account-menu">
                                <a class="collapsed"  data-bs-toggle="collapse"  href="#my-billing">
                                My Billing address
                                </a>
                            </div>
                            <div id="my-billing" class="panel-collapse collapse" data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <form class="billing-details shop-cart-table" action="/billing/{{$billing->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @include('flash')
                                        <input name="name" value="{{$billing->name}}" type="text" placeholder="Your name here...">
                                        <input name="email" value="{{$billing->email}}" type="text" placeholder="Email address here...">
                                        <input name="phone" value="{{$billing->phone}}" type="text" placeholder="Phone here...">
                                        <input name="company_name" value="{{$billing->company_name}}" type="text" placeholder="Company neme here...">
                                        <select name="country" class="custom-select mb-15">
                                            <option value='NULL'>Country</option>
                                            <option value='Bangladesh' {{$billing->country == 'Bangladesh' ? 'selected' : ''}}>Bangladesh</option>
                                            <option value='United States' {{$billing->country == 'United States' ? 'selected' : ''}}>United States</option>
                                            <option value='united Kingdom' {{$billing->country == 'united Kingdom' ? 'selected' : ''}}>united Kingdom</option>
                                            <option value='Australia' {{$billing->country == 'Australia' ? 'selected' : ''}}>Australia</option>
                                            <option value='Canada' {{$billing->country == 'Canada' ? 'selected' : ''}}>Canada</option>
                                        </select>
                                        <select name="state" class="custom-select mb-15">
                                            <option value="NULL">State</option>
                                            <option value='Dhaka' {{$billing->state == 'Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                            <option value='New york' {{$billing->state == 'New york' ? 'selected' : ''}}>New York</option>
                                            <option value='London' {{$billing->state == 'London' ? 'selected' : ''}}>London</option>
                                            <option value='Melbourne' {{$billing->state == 'Melbourne' ? 'selected' : ''}}>Melbourne</option>
                                            <option value='Ottawa' {{$billing->state == 'Ottawa' ? 'selected' : ''}}>Ottawa</option>
                                        </select>
                                        <select name="city" class="custom-select mb-15">
                                            <option value="NULL">Town / City</option>
                                            <option value='Dhaka' {{$billing->city == 'Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                            <option value='New york' {{$billing->city == 'New york' ? 'selected' : ''}}>New York</option>
                                            <option value='London' {{$billing->city == 'London' ? 'selected' : ''}}>London</option>
                                            <option value='Melbourne' {{$billing->city == 'Melbourne' ? 'selected' : ''}}>Melbourne</option>
                                            <option value='Ottawa' {{$billing->city == 'Ottawa' ? 'selected' : ''}}>Ottawa</option>
                                        </select>
                                        <textarea name="address" placeholder="Your address here..." class="custom-textarea">{{$billing->address}}</textarea>
                                        <button type="submit" data-text="update" class="submit-button submit-btn-2 button-one mt-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if ($order != null)
                        <div class="panel mb-2 mb-md-0">
                            <div class="my-account-menu">
                                <a class="collapsed"  data-bs-toggle="collapse"  href="#my-order">
                                Order history and details
                                </a>
                            </div>
                            <div id="my-order" class="panel-collapse collapse" data-bs-parent="#accordion">
                                <div class="panel-body">
                                    <div class="our-order payment-details shop-cart-table">
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
                        @endif					
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-group" id="accordion-2">
                        <div class="panel mb-2">
                            <div class="my-account-menu" >
                                <a  data-bs-toggle="collapse" href="#my-payment-method">
                                My Payment Method
                                </a>
                            </div>
                            <div id="my-payment-method" class="panel-collapse collapse show" data-bs-parent="#accordion-2">
                                <div class="panel-body">
                                    <div class="payment-method  shop-cart-table">
                                        <div class="payment-accordion">
                                            <!-- Accordion start  -->
                                            <h3 class="payment-accordion-toggle active">Direct Bank Transfer</h3>
                                            <div class="payment-content default">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                            </div> 
                                            <!-- Accordion end -->
                                            <!-- Accordion start -->
                                            <h3 class="payment-accordion-toggle">Cheque Payment</h3>
                                            <div class="payment-content">
                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                            <!-- Accordion end -->
                                            <!-- Accordion start -->
                                            <h3 class="payment-accordion-toggle">PayPal</h3>
                                            <div class="payment-content">
                                                <p>Pay via PayPal; you can pay with your credit card if you don�t have a PayPal account.</p>
                                                <a href="#"><img alt="" src="img/payment/1.png"></a>
                                                <a href="#"><img alt="" src="img/payment/2.png"></a>
                                                <a href="#"><img alt="" src="img/payment/3.png"></a>
                                                <a href="#"><img alt="" src="img/payment/4.png"></a>
                                            </div>
                                            <!-- Accordion end --> 
                                            <button type="submit" data-text="place order" class="button-one submit-button mt-15">place order</button>			
                                        </div>															
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="my-account-menu my-account-menu-2" >
                                <a  href="#" >
                                My Wishlist
                                </a>
                            </div>
                        </div>
                    </div>								
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MY-ACCOUNT-CART-AREA END -->