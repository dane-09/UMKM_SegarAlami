@extends('layouts.landing')

@section('title','Products')

@section('content')
    @include('components.page')
    @include('components.product',['product'=>$product])
@endsection

