<?php

   namespace App\Http\Controllers;

use App\Models\CourtCase;
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
        $cases = CourtCase::paginate(5);
        $caseCount = CourtCase::count();
           return view('lawyerHome', compact('cases', 'caseCount'));
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
            $cases = CourtCase::paginate(5);
            $caseCount = CourtCase::count();
           return view('adminHome', compact('cases', 'caseCount'));
       }
   }
