<!-- ABOUT-US-AREA START -->
<div class="about-us-area  pt-80 pb-80">
    <div class="container">	
        <div class="about-us bg-white">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-photo">
                        <img src="{{asset('img/images_site/530x450/'.$about->image->src)}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-brief bg-dark-white">
                        <h4 class="title-1 title-border text-uppercase mb-30">{{$about->title}}</h4>
                        <p>{{$about->content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->