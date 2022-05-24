@extends('layout.app')
@section('content')
    @include('partials.shoplist.banner')
    @include('partials.shoplist.productArea')
@endsection
@section('modal')
    @foreach ($products as $product)
        @include('partials.modal')
    @endforeach
@endsection

