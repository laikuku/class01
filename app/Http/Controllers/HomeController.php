<?php

namespace App\Http\Controllers;

use App\Home_model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
    	//return view('welcome');
    	//return View::make('day_and_class_1.blade',[]);
        return view('day_and_class01');


    }

    public function getStudentData($student_no){
    	return "student number is".$student_no;
    }

    public function getStudentScore($student_no,$subject = null){
    	return "student number is ".$student_no."and his is".((is_null($subject))?"all is":$subject);
    }

    public function showProfile()
    {
        $user = Home_model::all();

        //$user=Home_model::where('id','<','10')->get();


        //return view('welcome');

        return view('day_and_class01', array('users' => $user));
    }

    public function show($id)
    {
        $user=Home_model::where('id',$id)->get();
        
        return view('day_and_class01',['users' => $user]);
    }

    public function create()
    {
       /*$data_create= new Home_model;
        $data_create->id='21'->id;
        $data_create->save();*/
    }

    public function Calendar_index(){

      date_default_timezone_set('Asia/Taipei');
      $addY=date("Y");
      $addM=date("m");
      $t=date("t",mktime(0,0,0,$addM,1,$addY));
      $w=date("w",mktime(0,0,0,$addM,1,$addY)); 
      $F=date("F",mktime(0,0,0,$addM,1,$addY));
      $tempDate = date("Y-m-d H:i:s"); 
      /*
      $nowyear = date("Y",time() + $ctime * 3600); 
      $nowmon = date("n",time() + $ctime * 3600); 
      $nowday = date("j",time() + $ctime * 3600); 
      */

      //return "T".$t.$w.$F."</br>".$tempDate;
      return view('Calendar_index',[
        't'=>$t,
        'w'=>$w,
        'F'=>$F,
        'tempDate'=>$tempDate

        ]);
    }

    public function Calendar_Select($calendar_number)
    {
      //return "日期:".$calendar_number;
      $user=Home_model::where('BORROWer',$calendar_number)->get();
      return view('class_list',['users'=>$user]);




    }


}
