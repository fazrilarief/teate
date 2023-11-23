@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h4>Data Siswa</h4>
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="{{ route('student.create') }}" class="btn btn-primary">
                    <i class="fas fa-fw fa-plus"></i> Tambah Data
                </a>
                <div class="d-flex">
                    <div class="dropdown">
                        <button type="button" class="btn btn-info dropdown-toggle" id="importMenu" data-toggle="dropdown">
                            <i class="fas fa-fw fa-upload"></i> Import
                        </button>
                        <div class="dropdown-menu" aria-labelledby="importMenu">
                            <button class="dropdown-item">Template</button>
                            <button class="dropdown-item" data-toggle="modal" data-target="#importModal">Upload</button>
                        </div>
                    </div>
                    <button class="btn btn-success mx-2" data-toggle="modal" data-target="#exportModal">
                        <i class="fas fa-fw fa-file-excel"></i> Export
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="py-2">
                        <div class="alert alert-success">Data Berhasil Ditambahkan!</div>
                    </div>
                @elseif (Session::has('delete'))
                    <div class="py-2">
                        <div class="alert alert-danger">Data Berhasil Dihapus!</div>
                    </div>
                @endif
                <table class="table table-stripped" id="myTable">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tanggal Lahir</th>
                            <th>Minat</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($student as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas }} {{ $item->jurusan }} {{ $item->kode_kelas }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->minat }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a class="btn badge badge-info" href="{{ url('student/' . $item->id) }}">
                                        Lihat
                                    </a>
                                    <a href="#" class="btn badge badge-success">Edit</a>
                                    <button type="button" class="btn badge badge-danger" data-toggle="modal"
                                        data-target="#deleteModal"> Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Tidak Ditemukan...</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal Delete Data --}}
    <div class="modal fade static" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="deleteModal">PERHATIAN!</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-fw fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Data akan dihapus secara permanen!</p>
                    <div class="modal-footer">
                        @foreach ($student as $item)
                            <form action="{{ route('student.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                        @endforeach
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
