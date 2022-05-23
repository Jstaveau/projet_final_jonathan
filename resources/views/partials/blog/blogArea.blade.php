<!-- BLGO-AREA START -->
<div class="blog-area blog-2  pt-80 pb-80">
    <div class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-option mb-30 clearfix">
                        <!-- Categories start -->
                        <div class="dropdown floatleft">
                            <button class="option-btn active" data-bs-toggle="dropdown">
                                Categories
                            </button>
                            <div class="dropdown-menu dropdown-width">
                                <!-- Widget-Categories start -->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div id="cat-treeview" class="widget-info product-cat boxscrol2">
                                        <ul>
                                            <li><span>life style</span>
                                            </li>
                                            <li class="open"><span>room</span>
                                            </li>
                                            <li><span>kitchen</span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                                <!-- Widget-categories end -->
                            </div>
                        </div>
                        <!-- Categories end -->
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <!-- Single-blog start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-30">
                            <div class="blog-photo">
                                <a href="#"><img src="{{asset('img/images_site/320x200/'.$article->image->src)}}" alt="" /></a>
                                <div class="like-share text-center fix">
                                    <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                                    <a href="#"><i class="zmdi zmdi-comments"></i><span>{{count($article->comment)}} Comments</span></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="post-meta fix">
                                    <div class="post-date floatleft"><span class="text-dark-red">{{ $article->created_at->format('d') }}</span></div>
                                    <div class="post-year floatleft">
                                        <p class="text-uppercase text-dark-red mb-0">{{ $article->created_at->format('F, Y') }}</p>
                                        <h4 class="post-title"><a href="#" tabindex="0">{{ $article->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                                <p>{{ $article->content }}
                                </p>
                                <a href="#" class="button-2 text-dark-red">Read more...</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single-blog end -->
                @endforeach
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BLGO-AREA END -->
