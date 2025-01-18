@extends('layouts.landing')

@section('title','Services')

@section('content')
    @include('components.page')
    @include('components.service',['service'=>$service])
@endsection
