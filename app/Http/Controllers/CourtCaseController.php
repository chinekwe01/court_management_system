<?php

namespace App\Http\Controllers;

use App\Models\CourtCase;
use Illuminate\Http\Request;

class CourtCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = CourtCase::paginate(10);
        // $courtCase = CourtCase::find($id);
        return view('cases.index', compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cases.createCase');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'details' => 'required|max:255',
            'begins' => 'required',
            'ends' =>'required',
        ]);
        CourtCase::create($request->all());

        return redirect()->route('admin.case.index')->with('success','Case created successfully.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function show(CourtCase $courtCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function edit(CourtCase $courtCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourtCase $courtCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourtCase $courtCase)
    {
        //
    }
}
