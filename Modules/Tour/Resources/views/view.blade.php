@section('title', $category->meta_title)
@section('description', $category->meta_description)
@extends('layout.layouts')
@section('content')
    @include('layout.header', [
        'title' => $category->name,
        'image' => $category->image,
        'breadcrumb' => $category->name
    ])
        @include('tour::components.tour-listing')
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
@endsection
    