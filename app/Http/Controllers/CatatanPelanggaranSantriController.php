<?php

namespace App\Http\Controllers;

use App\Models\CP;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use PDF;

class CatatanPelanggaranSantriController extends Controller
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
        $pelanggaransantri = CP::all();
        $cp = CP::count();

        return view('pelanggaransantri.index',compact('pelanggaransantri','cp'));
    }

    public function create()
    {
        return view('pelanggaransantri.create');
    }

    public function store(Request $request)
    {
        CP::create($request->except(['_token','submit']));
        Toastr::success('Data berhasil di simpan','Berhasil');
        return redirect('/pelanggaransantri');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pelanggaransantri = CP::find($id);
        return view('pelanggaransantri.edit',compact(['pelanggaransantri']));
    }

    public function update(Request $request, $id)
    {
        $pelanggaransantri = CP::find($id);
        $pelanggaransantri->update($request->except(['_token','submit']));
        Toastr::success('Data berhasil diubah','Berhasil');
        return redirect('/pelanggaransantri');
    }

    public function destroy($id)
    {
        $pelanggaransantri = CP::find($id);
        $pelanggaransantri->delete();
        Toastr::success('Data berhasil di hapus','Berhasil');
        return redirect('/pelanggaransantri');
    }

    public function print()
    {
    }
}
