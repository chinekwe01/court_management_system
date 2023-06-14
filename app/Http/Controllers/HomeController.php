<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;

   class HomeController extends Controller
   {
       /**
        * Create a new controller instance.
        *
        * @return void
        */
       public function __construct()
       {
           $this->middleware('auth');
       }

       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
       public function lawyerHome()
       {
           return view('lawyerHome');
       }

       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
       public function judgeHome()
       {
           return view('judgeHome');
       }

       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
       public function adminHome()
       {
           return view('adminHome');
       }
   }
