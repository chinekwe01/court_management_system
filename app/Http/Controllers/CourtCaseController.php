<?php

namespace App\Http\Controllers;

use Nette\Utils\Random;
use App\Models\CourtCase;
use Illuminate\Support\Str;
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
        $cases = CourtCase::latest()->paginate(10);
        return view('cases.index', compact('cases'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('cases.createCase');
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
        $case = CourtCase::create([
            'suit_no' => Str::random(8),
            'type' => $request->type,
            'details' => $request->details,
            'begins' => $request->begins,
            'ends' => $request->ends,
        ]);
        // CourtCase::create($request->all());

        return redirect()->route('admin.case.index')->with('success','Case created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cases = CourtCase::where('id', $id)->get();
        $case = $cases->first();
        return view('cases.show', compact('case'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cases = CourtCase::find($id);
        return view('cases.edit', compact('cases'));
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
        $request->validate([
            'type' => 'required',
            'details' => 'required|max:255',
            'begins' => 'required',
            'ends' =>'required',
        ]);
        $courtCase->update($request->all());

        return redirect()->route('admin.case.index')->with('success','Case updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourtCase  $courtCase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courtCase = CourtCase::findOrFail($id);
        $courtCase->delete();

        return redirect()->route('admin.case.index')->with('success','Case deleted successfully.');
    }
}
