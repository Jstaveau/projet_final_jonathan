@extends('layouts.app')
@section('content')
    @include('flash')
    @include('partials.dashboard.catTags.tableProductCat')
    @include('partials.dashboard.catTags.tableArticleCat')
    @include('partials.dashboard.catTags.tableTags')
@endsection