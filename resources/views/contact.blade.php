@extends('layouts.landing')
@section('title','Contacts')
@section('content')
    @include('components.contact',['contact'=>$contact])
@endsection
