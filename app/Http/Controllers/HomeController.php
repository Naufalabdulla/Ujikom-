<?php

namespace App\Http\Controllers;

use App\Models\SP;
use App\Models\CP;
use App\Models\CA;
use Illuminate\Http\Request;
use DB;

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
    public function index()
    {
        $staff = DB::table('staff')->count();
        $users = DB::table('users')->count();
        $pengelolaansp = SP::count();
        $pelanggaransantri = CP::count();
        $pencatatanadabdanibadah = CA::count();
        $user_activity_logs = DB::table('user_activity_logs')->count();
        $activity_logs = DB::table('activity_logs')->count();
        return view('home',compact('staff','users','user_activity_logs','activity_logs','pengelolaansp','pelanggaransantri','pencatatanadabdanibadah'));
    }
}
