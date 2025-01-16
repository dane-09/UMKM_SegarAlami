@extends('layouts.landing')

@section('title','Homes')

@section('content')
    @include('components.hero',['herosection'=>$herosection])
    @include('components.gallery',['gallery'=>$gallery])
@endsection

