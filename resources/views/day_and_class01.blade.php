@extends('layouts.master')
@section('title','多日多節')
@section('title2','多日多節')
@section('content')

@foreach($users as $user)
	<div class="container"><h2> hi this more day more class: <small>{{$user->ARRAYname}}</small></h2></div>

@endforeach

@stop