<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sections;
use App\papers;
use App\user_info;
use App\event;
use App\news;
use App\message;
use App\comments;
use App\patrons;
use DB;
class PagesController extends Controller
{
        public function index()
        {        
              
                $sections =sections::all();
                $papers =papers::inRandomOrder()->take(18)->get();
                $event =event::all()->sortByDesc('Event_ID')->take(2);
                $news =news::all()->sortByDesc('News_ID')->take(3);
                $message =message::all();
                $CountOfuser = user_info::count();
                $CountOfpaper = papers::count();
                $CountOfSection = sections::count();
                $CountOfevents = event::count();
                return view('pages.index')
                ->with('sections',$sections)
                ->with('news',$news)
                ->with('papers',$papers)
                ->with('event',$event)
                ->with('message',$message)
                ->with('CountOfuser',$CountOfuser)
                ->with('CountOfpaper',$CountOfpaper)
                ->with('CountOfSection',$CountOfSection)
                ->with('CountOfevents',$CountOfevents);
               
        }
        public function webinar()
        {      
                $head ="Papers";
                $papers =papers::inRandomOrder()->get();
                $user = user_info::all();
                $sections =sections::all();
                return view('pages.webinar')
                ->with('head',$head)
                ->with('sections',$sections)
                ->with('user',$user)
                ->with('papers',$papers);
        }
        public function show($id){
                $head ="Papers";
                $paperDetails = DB::table('papers')->where('Paper_ID', $id)->get();
                //$emailid = papers::select('Email')->where('Paper_ID', $id)->get();
                foreach($paperDetails as $email){
                        $e=$email->Email;
                        $s=$email->Section_Name;
                }
                $UserDetails = user_info::all()->where('Email_ID', $e);
                $commentsDetails = comments::all()->sortByDesc('Comment_ID')->take(3)
                ->where('Paper_ID',$id)->take(4)
                ->sortByDesc('Paper_ID');
                $Related = papers::all()->where('Section_Name',$s)->take(5);
                return view('pages.PaperDetails')
                ->with('paperDetails',$paperDetails)
                ->with('UserDetails',$UserDetails)
                ->with('commentsDetails',$commentsDetails)
                ->with('Related',$Related)
                ->with('head',$head);
        }
       public function store(Request $request)
       {

        $this->validate($request,
         [
                'Name' => 'required',
                'Email' => 'required',
                'Comment' => 'required' 
                ]);
                
                $comments = new comments;
                $comments->Name = $request->input('Name');
                $comments->Paper_ID = $request->input('Paper');
                $comments->Comment = $request->input('Comment');
                $comments->Email_ID = $request->input('Email');
                $comments->save();
                $paperss=$request->input('Paper');
                echo $paperss;
                return redirect()->back()->with('paperdetails', [$paperss]);
               // return redirect('/paperdetails', ['Paper_ID'=>$paperss]);
               // return redirect('/paperdetails',[$paperss]);
       }
       public function aboutus()
       {

        $head ="About Us";
        $patrons = patrons::all();
        return view('pages.about')
        ->with('head',$head)
        ->with('patrons',$patrons);
        
       }
}