@extends('layout.app')
@section('content')
    @include('partials.home.carouselSection')
    @include('partials.home.productArea')
    @include('partials.home.blogArea')
    @include('partials.home.subscribeArea')
@endsection
@section('modal')
    @foreach ($featureds as $featured)
        @include('partials.modalHome')
    @endforeach
@endsection