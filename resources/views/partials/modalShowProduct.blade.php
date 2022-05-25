    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal-{{$product->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="#" src="{{asset('img/images_site/370x450/'.$product->pp->src)}}" />
                                </div>
                            </div><!-- .product-images -->
    
                            <div class="product-info">
                                <h1>{{$product->name}}</h1>
                                <div class="price-box-3">
                                    <hr />
                                    <div class="s-price-box">
                                        @if ($product->discount != null)
                                            <span class="new-price">${{$product->price * (1-$product->discount/100)}}</span>
                                            <span class="old-price">${{$product->price}}</span>
                                        @else
                                            <span class="new-price">${{$product->price}}</span>
                                        @endif
                                    </div>
                                    <hr />
                                </div>
                                <a href="/product" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="1" min="1">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to
                                            cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    {{$product->description}}
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Google +" href="#"
                                                    class="gplus social-icon"><i
                                                        class="zmdi zmdi-google-plus"></i></a></li>
                                            <li><a target="_blank" title="Twitter" href="#"
                                                    class="twitter social-icon"><i
                                                        class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a target="_blank" title="Facebook" href="#"
                                                    class="facebook social-icon"><i
                                                        class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a target="_blank" title="LinkedIn" href="#"
                                                    class="linkedin social-icon"><i
                                                        class="zmdi zmdi-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    