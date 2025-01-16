@extends('layouts.landing')

@section('title','Products')

@section('content')
    @include('components.product',['product'=>$product])
@endsection

