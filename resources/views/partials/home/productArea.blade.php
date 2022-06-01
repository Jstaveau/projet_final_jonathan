        <!-- PRODUCT-AREA START -->
        <div class="product-area pt-80 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title-border">Featured Products</h2>
                        </div>
                        <div class="product-slider style-1 arrow-left-right">
                            @foreach ($featureds as $featured)
                                <!-- Single-product start -->
                                <div class="single-product">
                                    <div class="product-img">
                                        @if ($featured->new && $featured->discount != null)
                                            <span class="pro-label both-label">new & sale</span>
                                        @elseif ($featured->new)
                                            <span class="pro-label new-label">new</span>
                                        @elseif ($featured->discount != null)
                                            <span class="pro-label sale-label">Sale</span>
                                        @endif
                                        <a href="/product/{{ $featured->id }}"><img
                                                src="{{ 'img/images_site/270x270/' . $featured->pp->src }}" alt="" /></a>
                                        <div class="product-action clearfix">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#productModal-{{ $featured->id }}" title="Quick View"><i
                                                    class="zmdi zmdi-zoom-in"></i></a>
                                            <form action="/cartProduct" method="POST">
                                                @csrf
                                                <input type="number" hidden name="product" value="{{$featured->id}}">
                                                <a href="#" data-bs-toggle="tooltip" data-placement="top"
                                                    title="Add To Cart"><button type="submit">
                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                </button>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info clearfix">
                                        <div class="fix">
                                            <h4 class="post-title floatleft"><a
                                                    href="/product/{{ $featured->id }}">{{ $featured->name }}</a></h4>
                                            <p class="floatright hidden-sm d-none d-md-block">
                                                {{ $featured->category->name }}</p>
                                        </div>
                                        <div class="fix">
                                            @if ($featured->discount != null)
                                                <s class="pro-price text-black me-2 floatleft ">$
                                                    {{ $featured->price }}</s>
                                                <span class="pro-price floatleft">$
                                                    {{ ($featured->price / 100) * (100 - $featured->discount) }}</span>
                                            @else
                                                <span class="pro-price floatleft">$ {{ $featured->price }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT-AREA END -->
