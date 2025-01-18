@extends('layouts.landing')
@section('title','Contacts')
@section('content')
    @include('components.page')
    @include('components.contact',['contact'=>$contact])
@endsection
