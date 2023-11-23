@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <h4>Detail Data {{ $student->nama }}</h4>
        <div class="card shadow">
            <div class="card-body">
                <div class="mb-3 form-group">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="number" class="form-control w-50" placeholder="ex: 1234567890" id="nisInput"
                        value="{{ $student->nis }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control w-50" value="{{ $student->nama }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control w-50" value="{{ $student->jenis_kelamin }}" readonly>
                </div>

                <div class="mb-3 form-group">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="text" class="form-control w-50" value="{{ $student->email }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="no_ponsel" class="form-label">Nomor Ponsel</label>
                    <input type="text" class="form-control w-50" value="{{ $student->no_ponsel }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea cols="20" rows="5" class="form-control w-50"readonly>{{ $student->alamat }}
                    </textarea>
                </div>
                <div class="mb-3 form-group">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control w-50" value="{{ $student->tanggal_lahir }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input class="form-control w-50"value="{{ $student->kelas }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="jurusan" class="form-label">jurusan</label>
                    <input class="form-control w-50"value="{{ $student->jurusan }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="kode_kelas" class="form-label">Kode Kelas</label>
                    <input class="form-control w-50"value="{{ $student->kode_kelas }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="minat" class="form-label">Minat</label>
                    <input class="form-control w-50"value="{{ $student->minat }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="minat" class="form-label">Dibuat</label>
                    <input class="form-control w-50"value="{{ $student->created_at }}" readonly>
                </div>
                <div class="mb-3 form-group">
                    <label for="minat" class="form-label">Terakhir Update</label>
                    <input class="form-control w-50"value="{{ $student->updated_at }}" readonly>
                </div>
                <a href="{{ route('student.index') }}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
@endsection
