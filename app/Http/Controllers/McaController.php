<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\webinar;
use DB;
class McaController extends Controller
{
  public  Function index(){
      $head = 'NCERC MCA';
        return view('pages.home')->with('head',$head);
    }
     public function show($id){
        $head = $id;
        //$webinar = webinar::all()->sortByDesc('Webinar_ID')->take(2);
        $webinar = DB::table('webinar')->where('Video_Name', $id)->get();
      
        // $arr1= ['OOP','DS','OS','OR','COA'];
        // $arr2 = ['ADM','BD','MC','ML','BI'];
        // $arr3 = ['PROJECT'];
        return view('pages.classes')
        ->with('id',$id)
        ->with('head',$head)
       
                ->with('webinar',$webinar);
    }
    
}
