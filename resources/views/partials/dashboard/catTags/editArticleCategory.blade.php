<div class="contact-us customer-login container my-5 bg-white">
    <div class="send-message">
        <form action="/article_category/{{ $articleCategory->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">New category name</label>
            <input value="{{$articleCategory->name}}" type="text" id="name" name="name">
            <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
        </form>
    </div>
</div>
