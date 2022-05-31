<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30"><img
                            src="{{ asset('img/images_site/70x83/' . $product->pp->src) }}" alt="">
                        {{ $product->name }} -
                        {{ $product->size }}</h4>
                </div>
                <form action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="pp">Change photo</label><br>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label for="name">Product Name</label>
                    <input id="name" type="text" value="{{ $product->name }}" name="name"
                        placeholder="Product name here..." />
                    <label for="size">Size</label>
                    <select name="size" id="size">
                        <option {{ $product->size == 'S' ? 'selected' : '' }} value="S">S</option>
                        <option {{ $product->size == 'M' ? 'selected' : '' }} value="M">M</option>
                        <option {{ $product->size == 'L' ? 'selected' : '' }} value="L">L</option>
                        <option {{ $product->size == 'XL' ? 'selected' : '' }} value="XL">XL</option>
                    </select>
                    <label for="category">Category</label>
                    <select name="category_id" id="category">
                        @foreach ($categories as $category)
                            <option {{ $category->name == $product->category_id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="price">Price (in $)</label>
                    <input id="price" min="0" type="number" value="{{ $product->price }}" name="price"
                        placeholder="Product price here..." />
                    <label for="discount">Discount (in %) - leave it empty if you don't want a discount</label>
                    <input id="discount" min="0" type="number" value="{{ $product->discount }}" name="discount"
                        placeholder="Discount (in %) - leave it empty if you don't want a discount" />
                    <label for="stock">Stock</label>
                    <input id="stock" min="0" type="number" value="{{ $product->stock }}" name="stock"
                        placeholder="Discount (in %) - leave it empty if you don't want a discount" />
                    <label for="desc">Description</label>
                    <textarea name="description" id="desc" cols="30" rows="10">{{ $product->description }}</textarea>
                    <p class="mb-0">
                        <input type="checkbox" id="new" name="new" {{$product->new ? 'checked' : ''}}>
                        <label for="new"><span>New product</span></label> <br>
                        <input type="checkbox" id="Star" name="star" {{$product->star ? 'checked' : ''}}>
                        <label for="Star"><span>Star product (only one star product possible)</span></label>
                    </p>
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
