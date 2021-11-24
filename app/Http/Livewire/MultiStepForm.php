<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Pengunjung;
use App\Models\Jam;
use App\Models\Jenispajak;
use App\Models\Jenislayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MultiStepForm extends Component
{
    public $nik;
    public $nama;
    public $status;
    public $email;
    public $notelp;
    public $kec;
    public $nop;
    public $layananId;
    public $tanggal;
    public $jenisId;
    public $jamId;
    public $jenislayanans;
    public $jams;
    public $jenispajaks;

    
    public $totalSteps = 2;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
        $this->jenispajaks = Jenispajak::orderby('jenis')->get();

        $this->updatedJenisID();
    }

    public function updatedJenisID()
    {
        if ($this->jenisId !='') {
            $this->jenislayanans = Jenislayanan::where('jenis_id', $this->jenisId)->get();
            $this->jams = Jam::where('jenis_id', $this->jenisId)->get();
        }else{
            $this->jams = [];
            $this->jenislayanans = [];
        }
    }


    public function render()
    {
        $pengunjungs = Pengunjung::with('jams','jenispajaks','jenislayanans');
        return view('livewire.multi-step-form');
       
    }


    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'nik'=>'required|min:16|unique:pengunjungs',
                'nama'=>'required|min:3',
                'status'=>'required',
                'email'=>'required|email:dns',
                'notelp'=>'required|unique:pengunjungs',
                
            ]);
        }
    }


    public function formregis(){
        $this->resetErrorBag();
        if($this->currentStep == 2){
            $this->validate([
            'jenisId'=>'required',
            'kec'=>'required|min:5',
            'nop'=>'required|unique:pengunjungs',
            'layananId'=>'required',
            'tanggal'=>'required|date|after:today',
            'jamId'=>'required',
            
            ]);
        }
        $pengunjung = array(
            'nik'=> $this->nik,
            'nama'=> $this->nama,
            'status'=> $this->status,
            'email'=> $this->email,
            'notelp'=> $this->notelp,
            'jenisId'=> $this->jenisId,
            'kec'=> $this->kec,
            'nop'=> $this->nop,
            'layananId'=> $this->layananId,
            'tanggal'=> $this->tanggal,
            'jamId'=> $this->jamId,
        );

        $cek = Pengunjung::where(['jenisId' => $this->jenisId, 'tanggal' => $this->tanggal, 'jamId' => $this->jamId])->count();
        if($cek > 3) {
            return redirect()->back()->with(['alert' => 'Maaf, jam sudah penuh']);
        } else {
            $id = Pengunjung::create($pengunjung)->id;

            $jam = DB::table('pengunjungs')
                ->join('jams', 'pengunjungs.jamId', '=', 'jams.id')
                ->where('pengunjungs.id', $id)
                ->first();
    
            $pengunjung = [
                'id' => $id,
                'kode' => $jam->kode,
                'jam' => $jam->jam,
                'tanggal'=> $this->tanggal,
            ];
            
            return redirect()->route('formsukses', $pengunjung);
        }

          
    }
}