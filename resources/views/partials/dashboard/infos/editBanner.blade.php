<!-- contact-us-AREA START -->
<h1 class="text-center m-5">Edit Banner</h1>
<div class="contact-us-area pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30"><img class="rounded" width="300px"
                            src="{{ asset('img/images_site/1920x300/' . $banner->image->src) }}" alt="">
                        {{ $banner->title }}</h4>
                </div>
                <form action="/banner/{{ $banner->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="pp">Change photo</label><br>
                    <input type="file" name="file" class="custom-file-input" id="pp"> <br>
                    <label for="name">Article title</label>
                    <input id="name" type="text" value="{{ $banner->title }}" name="title"
                        placeholder="Banner title here..." />
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
