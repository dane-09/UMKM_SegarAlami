@extends('layouts.landing')

@section('title','Homes')

@section('content')
    @include('components.hero',['herosection'=>$herosection])
    @include('components.about',['aboutus'=>$aboutus])
    @include('components.service',['service'=>$service])
    @include('components.banner',['banner'=>$banner])
    @include('components.gallery',['gallery'=>$gallery])
    @include('components.product')
@endsection

