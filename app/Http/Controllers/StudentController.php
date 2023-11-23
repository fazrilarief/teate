<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function StudentExport()
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }

    public function StudentImport(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move('DataSiswa', $fileName);

        Excel::import(new StudentImport, public_path('/DataSiswa/' . $fileName));
        return redirect()->route('student.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function index()
    {
        $student = Student::all();
        return view('pages.student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $defaultDate = '2005-01-01';
        return view('pages.student.create', compact('defaultDate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nis);
        Session::flash('nama', $request->nama);
        Session::flash('jenis_kelamin', $request->jenis_kelamin);
        Session::flash('email', $request->email);
        Session::flash('no_ponsel', $request->no_ponsel);
        Session::flash('alamat', $request->alamat);
        Session::flash('tanggal_lahir', $request->tanggal_lahir);
        Session::flash('kelas', $request->kelas);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('kode_kelas', $request->kode_kelas);
        Session::flash('minat', $request->minat);

        $request->validate([
            'nis' => 'required|numeric|unique:students,nis',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|unique:students,email',
            'no_ponsel' => 'required|unique:students,no_ponsel',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'kode_kelas' => 'required',
            'minat' => 'required',
        ]);

        $student = Student::create($request->all());

        return redirect()->route('student.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('pages.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Student::find($id);
        Session::flash('delete', $data->id);

        Student::where('id', $id)->delete();
        return redirect()->route('student.index')->with('delete', 'Data Berhasil Dihapus');
    }
}
