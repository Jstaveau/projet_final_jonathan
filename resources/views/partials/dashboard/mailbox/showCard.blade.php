<!-- BLGO-AREA START -->
<div class="blog-area blog-2 blog-details-area  pt-80 pb-80">
    <div class="container">
        <div class="blog">
            <div class="row">
                <!-- Single-blog start -->
                <div class="col-lg-12">
                    <div class="single-blog mb-30">
                        <div class="blog-info blog-details-info">
                            <h4 class="post-title post-title-2">From : {{ $mail->name . ' (' . $mail->mail . ')' }}
                            </h4>
                            <p>{{ $mail->message }}</p>
                        </div>
                        <div class="reply-box d-flex">
                            <form action="/mail/{{ $mail->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" data-text="archive mail" class="button-one submit-button mt-20 me-4">archive
                                    mail</button>
                            </form>
                            <a href="/writeanswer/{{$mail->id}}"><button data-text="answer" class="button-one submit-button mt-20">
                                answer
                            </button></a>
                        </div>
                    </div>
                </div>
                <!-- Single-blog end -->
                <a href="/dashboard/mails"><button data-text="back"
                        class="submit-button me-2 submit-btn-2 button-one">back</button></a>
            </div>
        </div>
    </div>
</div>
<!-- BLGO-AREA END -->
