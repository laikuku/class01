@extends('layouts.master')
@section('title','Calendar_index')
@section('title2','Calendar_index')
@section('content')


	<div class="container"><h2> Calendar<small>_index</small></h2></div>

	{{$tempDate}}
	<div class="container">
	<table class="table table-bordered">


	<tr> 
	      <td><font size=5 color=red><b>Sun</b></font></td>
	      <td><font size=4 color=222222><b>Mon</b></font></td>
	      <td><font size=4 color=222222><b>Tue</b></font></td> 
	      <td><font size=4 color=222222><b>Wed</b></font></td> 
	      <td><font size=4 color=222222><b>Thu</b></font></td> 
	      <td><font size=4 color=222222><b>Fri</b></font></td> 
	      <td><font size=5 color=green><b>Sat</b></font></td> 
	     </tr>
	@if($w > 1) 
	   <tr> 
	    @for ($i=1; $i<=$w-1; $i++)  
	        <td></td> 
	    @endfor
	@endif 

	@for($i=$w; $i<=$w+$t; $i++)  

	 @if ($i%7==1)
	   <tr><td>
	 @else
	   <td >
	 @endif
	 
	    @if($i-$w > 0)  
	      <font size=7><b></font> 
	   
	   {{--$k=$i-$w--}}
	   <a href="{{route('calendar_select',$k=$i-$w)}}">{{$k=$i-$w}}</a>

	      </b>
	    @else
	  
	 @endif
	 
	    @if ($i%7==0)
	   </td></tr>
	 @else
	   </td>
	 @endif
	@endfor

	@if ($i%7==0) 
	    <td > </td>
	@elseif ($i%7==1)  
	    
	@elseif (($i%7)>0)  
	    @for ($j=$i; $j<=$i+7; $j++)  
	        @if (($j%7)==0) 
	            <td > </td>
	            break; 
	        @else
	            <td > </td> 
	        @endif 
	    @endfor 
	    </tr> 
	@endif
	</table> 
	</div>
    



@stop