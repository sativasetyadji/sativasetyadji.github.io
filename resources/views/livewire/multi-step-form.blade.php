<form wire:submit.prevent="formregis" method="POST">
    @method('PUT')
    @csrf

        {{-- STEP 1 --}}

        @if ($currentStep == 1)
        <div class="step-one">
                    <div class="form-section">
                        <label class="label">NIK</label>
                        <input class="form-control" type="number" name="nik" wire:model="nik" autofocus>
                        <span class="text-danger">@error('nik'){{ $message }}@enderror </span>
                    </div>

                    <div class="form-section">
                        <label class="label">Nama</label>
                        <input  class="form-control" type="text" name="nama" wire:model="nama" >
                        <span class="text-danger">@error('nama'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Status Pengunjung</label>
                        <select class="form-control" wire:model="status">
                            <option selected>Pilih</option>
                            <option value="wajib pajak">Wajib Pajak</option>
                            <option value="kuasa">Kuasa</option>
                            <option value="dll">Dll</option>
                        </select>
                        <span class="text-danger"> @error('status'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section"> 
                        <label class="label">Email</label>
                        <input class="form-control" type="email" name="email" wire:model="email">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">No Telp</label>
                        <input class="form-control" type="number" name="notelp" wire:model="notelp">
                        <span class="text-danger">@error('notelp'){{ $message }}@enderror</span>
                    </div>
        </div>
        @endif

        @if ($currentStep == 2)
        <div class="step-two">

                    <div class="form-section">
                        <label class="label">Jenis Pajak</label>
                        <select class="form-control" wire:model="jenisId" autofocus>
                            <option selected>Pilih</option>
                            @foreach ($jenispajaks as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('jenisId'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Jenis Layanan</label>
                        <select class="form-control" wire:model="layananId">
                            <option selected>Pilih</option>
                            @foreach ($jenislayanans as $item)
                            <option value="{{ $item->id }}">{{ $item->layanan }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('layananId'){{ $message }}@enderror</span>
                    </div> 

                    <div class="form-section">
                        <label class="label">Kecamatan</label>
                            <input class="form-control" type="text" name="kec" wire:model="kec">
                            <span class="text-danger">@error('kec'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Nomor Objek Pajak</label>
                            <input class="form-control" type="number" name="nop" wire:model="nop">
                            <span class="text-danger">@error('nop'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Tanggal Kunjungan</label>
                            <input class="form-control" type="date" wire:model="tanggal">
                            <span class="text-danger">@error('tanggal'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Waktu Kunjungan</label>
                        <select class="form-control" wire:model="jamId">
                            <option selected>Pilih</option>
                            @foreach ($jams as $item)
                            <option value="{{ $item->id }}">{{ $item->jam }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('jamId'){{ $message }}@enderror</span>
                    </div> 

                    @if (session('alert'))
                        <br>
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif
        </div>
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2)
                <button type="button" class="btn btn-md btn-success" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1 )
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif
            
            @if ($currentStep == 2)
                 <button type="submit" class="btn btn-md btn--green">Submit</button>
            @endif
        </div>
        
    </form>