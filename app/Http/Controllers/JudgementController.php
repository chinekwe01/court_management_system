<?php

namespace App\Http\Controllers;

use App\Models\CourtCase;
use App\Models\Judgement;
use Illuminate\Http\Request;

class JudgementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judgements = Judgement::latest()->paginate(5);
        return view('judgement.index', compact('judgements'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function judgementTable()
    {
        $judgements = Judgement::latest()->paginate(5);
        return view('judges.judgement', compact('judgements'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function casesTable()
    {
        $cases = CourtCase::latest()->paginate(10);
        return view('judges.cases', compact('cases'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
