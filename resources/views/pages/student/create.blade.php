@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <h4>Tambah Data</h4>
        <div class="card shadow">
            <div class="container">
                @if ($errors->any())
                    <div class="my-2">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" name="nis" class="form-control" placeholder="ex: 1234567890"
                            id="nisInput" value="{{ Session::get('nim') }}" autofocus required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ Session::get('nama') }}"
                            required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Pria" {{ Session::get('jenis_kelamin') == 'Pria' ? 'selected' : '' }}>
                                Pria
                            </option>
                            <option value="Wanita" {{ Session::get('jenis_kelamin') == 'Wanita' ? 'selected' : '' }}>
                                Wanita
                            </option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}"
                            required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="no_ponsel" class="form-label">Nomor Ponsel</label>
                        <input type="number" name="no_ponsel" class="form-control" id="no_ponsel"
                            placeholder="ex: 08123456790 " value="{{ Session::get('no_ponsel') }}" required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control"
                            value="{{ Session::get('alamat') }}" required></textarea>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control w-25" name="tanggal_lahir" value="{{ $defaultDate }}"
                            required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control" required>
                            <option selected disabled>Pilih Tingkat Kelas</option>
                            <option value="10" {{ Session::get('kelas') == '10' ? 'selected' : '' }}>10</option>
                            <option value="11" {{ Session::get('kelas') == '11' ? 'selected' : '' }}>11</option>
                            <option value="12" {{ Session::get('kelas') == '12' ? 'selected' : '' }}>12</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="jurusan" class="form-label">jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option selected disabled>Pilih Jurusan</option>
                            <option value="MIA" {{ Session::get('jurusan') == 'MIA' ? 'selected' : '' }}>MIA</option>
                            <option value="IIS"{{ Session::get('jurusan') == 'IIS' ? 'selected' : '' }}>IIS</option>
                            <option value="Bahasa" {{ Session::get('jurusan') == 'Bahasa' ? 'selected' : '' }}>Bahasa
                            </option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="kode_kelas" class="form-label">Kode Kelas</label>
                        <select name="kode_kelas" id="kode_kelas" class="form-control" required>
                            <option selected disabled>1/2/3/4/5</option>
                            <option value="1" {{ Session::get('kode_kelas') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ Session::get('kode_kelas') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ Session::get('kode_kelas') == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ Session::get('kode_kelas') == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ Session::get('kode_kelas') == '5' ? 'selected' : '' }}>5</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="minat" class="form-label">Minat</label>
                        <select name="minat" id="minat" class="form-control" required>
                            <option selected disabled>Pilih Minat Kamu</option>
                            <option value="Puisi" {{ Session::get('minat') == 'Puisi' ? 'selected' : '' }}>Puisi</option>
                            <option value="Monolog" {{ Session::get('minat') == 'Monolog' ? 'selected' : '' }}>Monolog
                            </option>
                            <option value="Akting" {{ Session::get('minat') == 'Akting' ? 'selected' : '' }}>Akting
                            </option>
                        </select>
                    </div>
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('student.index') }}" class="btn btn-danger">
                        <i class="fas fa-arrow-left"></i> Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
