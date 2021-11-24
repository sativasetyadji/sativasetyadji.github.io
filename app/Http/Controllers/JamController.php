<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use App\Models\Jenispajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenispajaks = Jenispajak::all();

        if (request()->select) {
            $select = Jenispajak::orderBy('jenis')->get();
            $jams = Jam::where('jenis_id', request()->select)->get();
        } else {
            $jams = [];
        }
        return view('admin/nomor/index', compact('jams','jenispajaks'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenispajaks = Jenispajak::all();
        return view('admin/nomor/create', compact('jenispajaks'));
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
            'jenis_id'=>'required',
            'kode'=>'required',
            'jam'=>'required',
        ],[
            'jenis_id.required'=>'jenis pajak Tidak Boleh Kosong',
            'kode.required'=>'kode Tidak Boleh Kosong',
            'jam.required'=>'jam Tidak Boleh Kosong',
        ]);

        Jam::create([
            'jenis_id'=> $request->jenis_id,
            'kode'=> $request->kode,
            'jam'=> $request->jam,
        ]);

        return redirect('jams')->with('status', 'Nomor Berhasil DiTambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function show(Jam $jam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function edit(Jam $jam)
    {
        return view('admin/nomor/edit', compact('jam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jam $jam)
    {
        $request->validate([
            'kode'=>'required',
            'jam'=>'required',
        ],[
            'kode.required'=>'Nomor Tidak Boleh Kosong',
            'jam.required'=>'Waktu Tidak Boleh Kosong',
        ]);

        $jam->kode = $request->kode;
        $jam->jam = $request->jam;
        $jam->save();

        return redirect('jams')->with('status', 'Nomor Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jam $jam)
    {
        $jam->delete();
        return redirect('jams')->with('status', 'Nomor Berhasil DiHapus!');
    }
}
