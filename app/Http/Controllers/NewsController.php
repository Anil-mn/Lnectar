<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  public  Function show($id){
    $head = 'subject';
    if($id==1){$sem='Semester 2';}
    if($id==2){$sem='Semester 4';}
    if($id==3){$sem='Semester 6';}
    if($id==1){
    $arr= ['OOP','DS','OS','OR','COA'];
      }
      elseif($id==2){
        $arr = ['ADM','BD','MC','ML','BI'];
      }
    else{$arr = ['PROJECT'];}
    return view('pages.subject')
    ->with('head',$head)
    ->with('sem',$sem)
    ->with('arr',$arr)
    ->with('id',$id);
  }
 
}
