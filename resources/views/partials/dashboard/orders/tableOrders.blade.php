<h1 class="text-center m-5">Articles' categories</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        User
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Products
                    </th>
                    <th>
                        Total
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            {{ $order->id }}
                        </td>
                        <td>
                            {{ $order->user->name }}
                        </td>
                        <td>
                            {{ $order->user->billing->address }}
                        </td>
                        <td>
                            @foreach ($order->orderproducts as $orderproduct)
                                {{$orderproduct->product->name.' ($'.number_format($orderproduct->product->price, 2).') x'.$orderproduct->amount}} <br>
                            @endforeach
                        </td>
                        <td>
                            ${{number_format($order->total, 2)}}
                        </td>
                        <td class="d-flex h-100">
                            <form class="ms-2" action="/order/{{ $order->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-text="cancel" class="submit-button submit-btn-2 button-one" type="submit">
                                    Cancel
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
