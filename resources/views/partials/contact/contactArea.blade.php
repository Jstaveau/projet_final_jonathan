<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-details">
                        <h4 class="title-1 title-border text-uppercase mb-30">contact details</h4>
                        <ul>
                            <li>
                                <i class="zmdi zmdi-pin"></i>
                                <span>{{ $info->address }}</span>
                            </li>
                            <li>
                                <i class="zmdi zmdi-phone"></i>
                                <span>{{ $info->phone }}</span>
                                <span>{{ $info->phone2 }}</span>
                            </li>
                            <li>
                                <i class="zmdi zmdi-email"></i>
                                <span>{{ $info->mail }}</span>
                                <span>{{ $info->mail2 }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="send-message mt-60">
                        <form action="/mail" method="POST">
                            @csrf
                            <h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
                            <input type="text" name="name" placeholder="Your name here..." />
                            <input type="text" name="mail" placeholder="Your email here..." />
                            <textarea class="custom-textarea" name="message" placeholder="Your comment here..."></textarea>
                            <button class="button-one submit-button mt-20" data-text="submit message"
                                type="submit">submit message</button>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 mt-xs-30">
                    <div class="map-area">
                        <iframe src="https://maps.google.com/maps?&q={{str_replace(' ', '+', $info->address)}}&output=embed" frameborder="0" style="border:0; width: 100%; height: 600px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
