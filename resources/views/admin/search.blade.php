@extends('admin.layouts.app')
@section('title','your search result')
@section('main-content')
@if(count($card)>0)
    @foreach($card as $c)
    <div><img src="{{asset('storage/upload/'.$c->card)}} " style="height:150px; width:150px;" alt=""></div>
    <br>
    <div> {{$c->serialno}} </div>
    @endforeach
@endif
@endsection