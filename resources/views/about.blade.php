@extends('layouts.landing')
@section('title','About Us')
@section('content')
    @include('components.about',['aboutus'=>$aboutus])
@endsection

