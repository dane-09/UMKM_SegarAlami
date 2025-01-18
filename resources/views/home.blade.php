@extends('layouts.landing')

@section('title','Homes')

@section('content')
    @include('components.hero',['herosection'=>$herosection])
<<<<<<< HEAD
    @include('components.about',['aboutus'=>$aboutus])
    @include('components.service',['service'=>$service])
    @include('components.banner',['banner'=>$banner])
    @include('components.gallery',['gallery'=>$gallery])
    @include('components.product')
=======
    @include('components.gallery',['gallery'=>$gallery])
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
@endsection

