<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PengunjungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $pengunjungs = Pengunjung::where('tanggal', Carbon::now()->toDateString())->get();
        // dd($pengunjungs);


        if (request()->start_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $pengunjungs = Pengunjung::where('tanggal',[$start_date])->get();
        } else {
            $pengunjungs = Pengunjung::where('tanggal', Carbon::now()->toDateString())->get();
        }

        $paginate = Pengunjung::paginate(15);
        return view('admin/pengunjung/index', compact('pengunjungs','paginate'));
    }

    public function destroy(Pengunjung $pengunjung)
    {
        $pengunjung->delete();
        return redirect('pengunjungs')->with('status', 'Nomor Berhasil DiHapus!');
    }
}
