@extends('layout/templateberanda_user')
@section('content')
    <div class="container-fluid mt-4">
        <div class="mb-4">
            <label class="form-label">Nama Petugas</label>
            <input class="form-control @error('nama_petugas') is-invalid @enderror" name="nama_petugas" id="nama_petugas"
                type="text" value="{{ old('nama_petugas') }}" required>
            @error('nama_petugas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="form-label">Nomor HP</label>
            <input class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" id="nomor_hp"
                type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="{{ old('nomor_hp') }}"
                required>
            @error('nomor_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

    </div>
@endsection
