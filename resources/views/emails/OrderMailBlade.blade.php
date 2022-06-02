<h1>{{ $details['subject'] }}</h1>
<br>
@foreach ($details['products'] as $product)
    {{$product->name}} <br>
@endforeach
Total = {{ $details['total'] }}$
<p>Votre commande sera livrée chez vous : {{$details['address']}}</p>