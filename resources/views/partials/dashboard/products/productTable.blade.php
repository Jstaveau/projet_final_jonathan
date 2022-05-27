<h1 class="text-center m-5">Products</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Product
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Resume
                    </th>
                    <th>
                        Size
                    </th>
                    <th>
                        New
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product->id }}
                        </td>
                        <td>
                            <img class="rounded" width="50px" height="45px"
                                src="{{ asset('img/images_site/70x83/' . $product->pp->src) }}" alt="">
                            {{ $product->name }}
                        </td>
                        <td>
                            ${{ $product->price }} {{$product->discount != null ? '/discount : '.$product->discount.'% -> $'.$product->price*(1-$product->discount/100) : ''}}
                        </td>
                        <td>
                            {{ substr($product->description, 0, 70) }}...
                        </td>
                        <td>
                            {{ $product->size }}
                        </td>
                        <td class="{{ $product->new ? 'bg-success' : 'bg-danger' }}">
                            
                        </td>
                        <td class="d-flex h-100">
                            <a href="/product/{{$product->id}}/edit"><button data-text="Edit" class="submit-button submit-btn-2 button-one">Edit</button></a>
                            <form class="ms-2" action="/product/{{$product->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-text="delete" class="submit-button submit-btn-2 button-one" type="submit">
                                    delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a data-text="Add a product" class="button-one style-2 text-uppercase" href="/product/create">Add a product</a><br>
    </div>
</div>
