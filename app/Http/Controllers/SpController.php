<?php

namespace App\Http\Controllers;

use App\Models\SP;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use PDF;

class SpController extends Controller
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
        $pengelolaansp = SP::all();
        $sp = SP::count();

        return view('pengelolaansp.index',compact('pengelolaansp','sp'));
    }

    public function create()
    {
        return view('pengelolaansp.create');
    }

    public function store(Request $request)
    {
        SP::create($request->except(['_token','submit']));
        Toastr::success('Data berhasil di simpan','Berhasil');
        return redirect('/pengelolaansp');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pengelolaansp = SP::find($id);
        return view('pengelolaansp.edit',compact(['pengelolaansp']));
    }

    public function update(Request $request, $id)
    {
        $pengelolaansp = SP::find($id);
        $pengelolaansp->update($request->except(['_token','submit']));
        Toastr::success('Data berhasil diubah','Berhasil');
        return redirect('/pengelolaansp');
    }

    public function destroy($id)
    {
        $pengelolaansp = SP::find($id);
        $pengelolaansp->delete();
        Toastr::success('Data berhasil di hapus','Berhasil');
        return redirect('/pengelolaansp');
    }

    public function print()
    {
        $pengelolaansp = SP::all();

        $path = base_path('idn.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic  = 'data:image/' . $type . ';base64' . base64_encode($data);

        $pdf = PDF::loadView('pengelolaansp.print', compact('pengelolaansp'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('pengelolaansp');
    }
}
