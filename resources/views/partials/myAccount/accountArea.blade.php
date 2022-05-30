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
                                    <form class="billing-details shop-cart-table">
                                        <input name="name" value="{{$user->name}}" type="text" placeholder="Your name here...">
                                        <input name="email" value="{{$user->email}}" type="text" placeholder="Email address here...">
                                        <input name="phone" value="{{$user->phone}}" type="text" placeholder="Phone here...">
                                        <input name="company_name" value="{{$user->company_name}}" type="text" placeholder="Company neme here...">
                                        <select name="country" class="custom-select mb-15">
                                            <option>Country</option>
                                            <option>Bangladesh</option>
                                            <option>United States</option>
                                            <option>united Kingdom</option>
                                            <option>Australia</option>
                                            <option>Canada</option>
                                        </select>
                                        <select name="state" class="custom-select mb-15">
                                            <option>State</option>
                                            <option>Dhaka</option>
                                            <option>New York</option>
                                            <option>London</option>
                                            <option>Melbourne</option>
                                            <option>Ottawa</option>
                                        </select>
                                        <select name="city" class="custom-select mb-15">
                                            <option>Town / City</option>
                                            <option>Dhaka</option>
                                            <option>New York</option>
                                            <option>London</option>
                                            <option>Melbourne</option>
                                            <option>Ottawa</option>
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
                                    <form class="billing-details shop-cart-table">
                                        <input name="name" value="{{$billing->name}}" type="text" placeholder="Your name here...">
                                        <input name="email" value="{{$billing->email}}" type="text" placeholder="Email address here...">
                                        <input name="phone" value="{{$billing->phone}}" type="text" placeholder="Phone here...">
                                        <input name="company_name" value="{{$billing->company_name}}" type="text" placeholder="Company neme here...">
                                        <select name="country" class="custom-select mb-15">
                                            <option>Country</option>
                                            <option>Bangladesh</option>
                                            <option>United States</option>
                                            <option>united Kingdom</option>
                                            <option>Australia</option>
                                            <option>Canada</option>
                                        </select>
                                        <select name="state" class="custom-select mb-15">
                                            <option>State</option>
                                            <option>Dhaka</option>
                                            <option>New York</option>
                                            <option>London</option>
                                            <option>Melbourne</option>
                                            <option>Ottawa</option>
                                        </select>
                                        <select name="city" class="custom-select mb-15">
                                            <option>Town / City</option>
                                            <option>Dhaka</option>
                                            <option>New York</option>
                                            <option>London</option>
                                            <option>Melbourne</option>
                                            <option>Ottawa</option>
                                        </select>
                                        <textarea name="address" placeholder="Your address here..." class="custom-textarea">{{$billing->address}}</textarea>
                                        <button type="submit" data-text="update" class="submit-button submit-btn-2 button-one mt-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                                                <tr>
                                                    <td>Dummy Product Name  x 2</td>
                                                    <td class="text-end">$86.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Dummy Product Name  x 1</td>
                                                    <td class="text-end">$69.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Cart Subtotal</td>
                                                    <td class="text-end">$155.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping and Handing</td>
                                                    <td class="text-end">$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Vat</td>
                                                    <td class="text-end">$00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Order Total</td>
                                                    <td class="text-end">$170.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>					
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