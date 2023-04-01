<?php

namespace App\Http\Controllers;

use App\Models\RaporAdab;
use Illuminate\Http\Request;

class RaporAdabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raporadab = RaporAdab::all();

        return view('raporadabdanibadahsantri.index',compact('raporadab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raporadabdanibadahsantri.create');
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
     * @param  \App\Models\RaporAdab  $raporAdab
     * @return \Illuminate\Http\Response
     */
    public function show(RaporAdab $raporAdab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RaporAdab  $raporAdab
     * @return \Illuminate\Http\Response
     */
    public function edit(RaporAdab $raporAdab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RaporAdab  $raporAdab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaporAdab $raporAdab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RaporAdab  $raporAdab
     * @return \Illuminate\Http\Response
     */
    public function destroy(RaporAdab $raporAdab)
    {
        //
    }
}