<div>
    <div class="form-group row ">
        <div class="col-md-6">
        <label  class="provinsi">PROVINSI</label>
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>PILIH PROVINSI</option>
                @foreach($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
        <label for="reaktif">TOTAL REAKTIF</label>
        <input type="text" class="form-control" value="@if (isset($tracking)){{$tracking->reaktif}} @endif" name="reaktif" required>
        </div>
    </div>

        <div class="form-group row ">
            <div class="col-md-6">
    {{-- @if(!is_null($selectedProvinsi)) --}}
            <label for="Kota">KOTA</label>
                <select wire:model="selectedKota" class="form-control">
                    <option value="" selected>PILIH KABUPATEN/KOTA</option>
                    @foreach($kotas as $kota)
                        <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="positif">TOTAL POSITIF</label>
                <input type="text" class="form-control" value="@if (isset($tracking)){{$tracking->positif}} @endif" name="positif" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    {{-- <!-- @if (!is_null($selectedKota)) --> --}}
            <label for="kecamatan">KECAMATAN</label>
                <select wire:model="selectedKecamatan" class="form-control">
                    <option value="" selected>PILIH KECAMATAN</option>
                    @foreach($kecamatans as $kecamatan)
                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="sembuh">TOTAL SEMBUH</label>
                <input type="text" class="form-control" value="@if (isset($tracking)){{$tracking->sembuh}} @endif" name="sembuh" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    {{-- <!-- @if (!is_null($selectedKecamatan)) --> --}}
            <label for="kelurahan" >KELURAHAN</label>
                <select wire:model="selectedKelurahan" class="form-control">
                    <option value="" selected>PILIH KELURAHAN</option>
                    @foreach($kelurahans as $kelurahan)
                        <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama_kelurahan }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="tanggal">TOTAL MENINGGAL</label>
                <input type="text" class="form-control" value="@if (isset($tracking)){{$tracking->meninggal}} @endif" name="meninggal" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    {{-- <!-- @if (!is_null($selectedkelurahan)) --> --}}
            <label for="rw" >RW</label>
                <select wire:model="selectedRw" class="form-control" name="id_rw">
                    <option value="" selected>PILIH RW</option>
                    @foreach($rws as $rw)
                        <option value="{{ $rw->id }}">{{ $rw->nama_rw }}</option>
                    @endforeach
                </select>
    {{-- <!-- @endif --> --}}
            </div>
            <div class="col-md-6">
                <label for="tanggal">TANGGAL</label>
                <input type="date" name="tanggal"  class="form-control" value="@if (isset($tracking)){{$tracking->tanggal}} @endif" required>
            </div>
        </div>
</div>