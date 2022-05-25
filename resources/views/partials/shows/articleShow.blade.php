<!-- BLGO-AREA START -->
<div class="blog-area blog-2 blog-details-area  pt-80 pb-80">
    <div class="container">
        <div class="blog">
            <div class="row">
                <!-- Single-blog start -->
                <div class="col-lg-12">
                    <div class="single-blog mb-30">
                        <div class="blog-photo">
                            <a href="#"><img src="{{ asset('img/images_site/1090x450/' . $article->image->src) }}"
                                    alt="" /></a>
                            <div class="like-share fix">
                                <a href="#"><i
                                        class="zmdi zmdi-account"></i><span>{{ $article->user->name }}</span></a>
                                <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                                <a href="#"><i class="zmdi zmdi-comments"></i><span>{{ count($article->comment) }}
                                        Comments</span></a>
                            </div>
                            <div class="post-date post-date-2">
                                <span class="text-dark-red">{{ $article->created_at->format('d') }}</span>
                                <span
                                    class="text-dark-red text-uppercase">{{ $article->created_at->format('F') }}</span>
                            </div>
                        </div>
                        <div class="blog-info blog-details-info">
                            <h4 class="post-title post-title-2"><a href="#">{{ $article->title }}</a></h4>
                            <p>{{ $article->content }}</p>
                            <div class="post-share-tag clearfix mt-40">
                                <div class="post-share floatleft">
                                    <span class="text-uppercase"><strong>Share</strong></span>
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                                    <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                                <div class="post-share post-tag floatright">
                                    <span class="text-uppercase"><strong>tags</strong></span>
                                    @foreach ($article->tag as $tag)
                                        <a href="#">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pro-reviews mt-60">
                                <div class="customer-review mb-60">
                                    <h3 class="tab-title title-border mb-30">Customer comments</h3>
                                    <ul class="product-comments clearfix">
                                        @foreach ($article->comment as $comment)
                                            <li class="{{ $loop->iteration == 1 ? 'mb-30' : 'threaded-comments' }}">
                                                <div class="pro-reviewer">
                                                    <img src="{{ asset('img/images_site/90x100/' . $comment->user->avatar->src) }}"
                                                        alt="" />
                                                </div>
                                                <div class="pro-reviewer-comment">
                                                    <div class="fix">
                                                        <div class="floatleft mbl-center">
                                                            <h5 class="text-uppercase mb-0">
                                                                <strong>{{ $comment->user->name }}</strong></h5>
                                                            <p class="reply-date">
                                                                {{ $comment->created_at->format('d F, Y') . ' at ' . $comment->created_at->format('h:ia') }}
                                                            </p>
                                                        </div>
                                                        <div class="comment-reply floatright">
                                                            <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">{{ $comment->content }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @can('authentification')
                                    <div class="leave-review">
                                        <h3 class="tab-title title-border mb-30">Leave your comment</h3>
                                        <div class="reply-box">
                                            <form action="/article" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Your name here..." />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Your subject here..." />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="custom-textarea" name="content" placeholder="Your review here..."></textarea>
                                                        <button type="submit" data-text="submit review"
                                                            class="button-one submit-button mt-20">submit review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single-blog end -->
            </div>
        </div>
    </div>
</div>
<!-- BLGO-AREA END -->
