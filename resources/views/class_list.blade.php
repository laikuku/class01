@extends('layouts.master')
@section('title','Calendar_index')
@section('title2','Calendar_index')
@section('content')


	
	@forelse($users as $user)

	<div class="container"><h2> hi this more day more class: <small>{{$user->ARRAYname}}</small></h2></div>
	    <div class="container">
	    	<ul>
	    		<li>姓名:{{$user->ARRAYname}}</li>
	    		<li>租借場地:{{$user->CLASSROOMname}}</li>
	    		<li>日期:{{$user->SCHEDULEyear}}-{{$user->SCHEDULEmonth}}-{{$user->BORROWer}}</li>
	    		<li>聯絡方式:{{$user->CELLphone}}</li>
	    		<li>其他I:{{$user->PURPOSE}}</li>
	    		<li>其他II:{{$user->application}}</li>
	    	</ul>
	    </dvi>



	@empty
	<div class="container"><h2> 無人租借</h2></div>
	@endforelse


@stop