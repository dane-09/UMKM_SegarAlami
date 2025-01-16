@extends('layouts.landing')

@section('title','Services')

@section('content')
    @include('components.service',['service'=>$service])
@endsection
