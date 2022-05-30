<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30"><img class="rounded" width="90px"
                            src="{{ asset('img/images_site/270x230/' . $article->image->src) }}" alt="">
                        {{ $article->title }} -
                        {{ $article->user->name }}</h4>
                </div>
                <form action="/article/{{ $article->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="pp">Change photo</label><br>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile"> <br>
                    <label for="name">Article title</label>
                    <input id="name" type="text" value="{{ $article->title }}" name="title"
                        placeholder="Product name here..." />
                    <label for="desc">Content</label>
                    <textarea name="content" id="desc" cols="30" rows="10">{{ $article->content }}</textarea>
                    <label for="category">Category</label>
                    <select name="article_category_id" id="category">
                        @foreach ($categories as $category)
                            <option {{ $category->id == $article->article_category_id ? 'selected' : '' }}
                                value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <label>Tags</label>
                    <select class="js-example-basic-multiple mb-3" name="tags[]" multiple="multiple">
                        @foreach ($tags as $tag)
                            <option {{ in_array($tag->name, $articleTagsArray) ? 'selected' : ''}} name="tag" value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
