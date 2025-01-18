@extends('layouts.landing')
@section('title','About Us')
@section('content')
    @include('components.page')
    @include('components.about',['aboutus'=>$aboutus])


@endsection

