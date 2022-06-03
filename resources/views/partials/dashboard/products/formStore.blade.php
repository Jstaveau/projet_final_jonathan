<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30">
                        Product informations</h4>
                </div>
                @include('flash')
                <form action="/product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="pp">Change photo</label><br>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label for="name">Product Name</label>
                    <input id="name" type="text" name="name"
                        placeholder="Product name here..." />
                    <label for="size">Size</label>
                    <select name="size" id="size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <label for="category">Category</label>
                    <select name="category_id" id="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="price">Price (in $)</label>
                    <input id="price" min="0" type="number" name="price"
                        placeholder="Product price here..." />
                    <label for="discount">Discount (in %) - leave it empty if you don't want a discount</label>
                    <input id="discount" min="0" type="number" name="discount"
                        placeholder="Discount (in %) - leave it empty if you don't want a discount" />
                    <label for="stock">Stock</label>
                    <input id="stock" min="0" type="number" name="stock"
                        placeholder="Amount of product available" />
                    <label for="desc">Description</label>
                    <textarea placeholder="Product description" name="description" id="desc" cols="30" rows="10"></textarea>
                    <p class="mb-0">
                        <input type="checkbox" id="new" name="new" checked>
                        <label for="new"><span>New product</span></label>
                    </p>
                    <button class="button-one submit-button mt-20" data-text="create" type="submit">Create</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
