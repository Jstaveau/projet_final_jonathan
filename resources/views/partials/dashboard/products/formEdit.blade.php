<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <h4 class="title-1 text-uppercase mb-30"><img src="{{asset('img/images_site/70x83/'.$product->pp->src)}}" alt="">  {{$product->name}} - {{$product->size}}</h4>
                    <label for="name">Product Name</label>
                    <input id="name" type="text" value="{{$product->name}}" name="name" placeholder="Product name here..." />
                    <label for="size">Size</label>
                    <select name="" id="size">
                        <option {{$product->size == 'S' ? 'selected' : ''}} value="S">S</option>
                        <option {{$product->size == 'M' ? 'selected' : ''}} value="M">M</option>
                        <option {{$product->size == 'L' ? 'selected' : ''}} value="L">L</option>
                        <option {{$product->size == 'XL' ? 'selected' : ''}} value="XL">XL</option>
                    </select>
                    <label for="price">Price (in $)</label>
                    <input id="price" type="number" value="{{$product->price}}" name="price" placeholder="Product price here..." />
                    <label for="discount">Discount (in %) - leave it empty if you don't want a discount</label>
                    <input id="discount" type="number" value="{{$product->discount}}" name="discount" placeholder="Discount (in %) - leave it empty if you don't want a discount" />
                    <label for="desc">Description</label>
                    <textarea name="description" id="desc" cols="30" rows="10">{{$product->description}}</textarea>
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
