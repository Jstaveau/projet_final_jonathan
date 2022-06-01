<h1 class="text-center">Details images</h1>
<div class="product-slider container m-auto style-1 arrow-left-right">
    @foreach ($images as $image)
        <div class="single-product">
            <div class="product-img">
                <img src="{{ asset('img/images_site/370x450/' . $image->src) }}" alt="" />
            </div>
            <div class="mt-20 mb-2">
                <form action="/image/{{ $image->id }}/reset" method="POST">
                    @csrf
                    @method('PUT')
                    <button data-text="Delete" class="button-one font-16px style-3 text-uppercase" type="submit"
                        tabindex="0">Delete</button><br>
                </form>
            </div>
        </div>
    @endforeach
</div>
<form class="container p-5" action="/product/{{$product->id}}/details" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="pp">Change photo</label><br>
    <input type="file" name="file" class="custom-file-input" id="chooseFile">
    <button data-text="Delete" class="button-one font-16px style-3 text-uppercase" type="submit"
        tabindex="0">Add</button><br>
</form>
