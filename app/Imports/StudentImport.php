<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'nis' => $row['1'],
            'nama' => $row['2'],
            'jenis_kelamin' => $row['3'],
            'email' => $row['4'],
            'no_ponsel' => $row['5'],
            'alamat' => $row['6'],
            'tanggal_lahir' => $row['7'],
            'kelas' => $row['8'],
            'jurusan' => $row['9'],
            'kode_kelas' => $row['10'],
            'minat' => $row['11'],
        ]);
    }
}
