<!-- contact-us-AREA START -->
<h1 class="text-center m-5">About</h1>
<div class="contact-us-area">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30"><img class="rounded" width="100px"
                            src="{{ asset('img/images_site/530x450/' . $about->image->src) }}" alt="">
                        {{ $about->title }}</h4>
                </div>
                <form action="/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="pp">Change photo</label><br>
                    <input type="file" name="file" class="custom-file-input" id="pp"> <br>
                    <label for="name">About title</label>
                    <input id="name" type="text" value="{{ $about->title }}" name="title"
                        placeholder="Banner title here..." />
                    <label for="content">About content</label>
                    <textarea name="content" id="content" cols="30" rows="10">{{$about->content}}</textarea>
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
