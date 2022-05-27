<h1 class="text-center m-5">Users</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active" id="elements-preview-3">
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
                        <td>
                            <a href="/product/{{$product->id}}/edit"><button data-text="Edit" class="submit-button submit-btn-2 button-one">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
