<?php

namespace App\Http\Controllers;

use App\Models\RaporAdab;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Brian2694\Toastr\Facades\Toastr;
use PDF;
=======
>>>>>>> 2afe71c5104f2d71ae1c3a33d865a5347e352b8b

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
<<<<<<< HEAD
        RaporAdab::create($request->except(['_token','submit']));
        Toastr::success('Data berhasil di simpan','Berhasil');
        return redirect("/raporadabdanibadah");
=======
        //
>>>>>>> 2afe71c5104f2d71ae1c3a33d865a5347e352b8b
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
<<<<<<< HEAD
        $rapor = RaporAdab::find($id);
        $rapor->delete();
        Toastr::success('Data berhasil di hapus','Berhasil');
        return redirect('/raporadabdanibadah');
    }
}
=======
        //
    }
}
>>>>>>> 2afe71c5104f2d71ae1c3a33d865a5347e352b8b
