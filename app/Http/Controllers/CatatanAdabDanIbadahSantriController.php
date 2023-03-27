<?php

namespace App\Http\Controllers;

use App\Models\CA;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use PDF;

class CatatanAdabDanIbadahSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pencatatanadabdanibadah = CA::all();

        return view('pencatatanadabdanibadah.index',compact('pencatatanadabdanibadah'));
    }

    public function create()
    {
        return view('pencatatanadabdanibadah.create');
    }

    public function store(Request $request)
    {
        CA::create($request->except(['_token','submit']));
        Toastr::success('Data berhasil di simpan','Berhasil');
        return redirect('/pencatatanadabdanibadah');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        $pencatatanadabdanibadah = CA::find($id);
        $pencatatanadabdanibadah->delete();
        Toastr::success('Data berhasil di hapus','Berhasil');
        return redirect('/pencatatanadabdanibadah');
    }
}
