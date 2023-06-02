<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
public function index()
{
$model=new Mahasiswa();
$data=$model->all();
foreach($data as $dt) {
$balikan[]=[
'nim'=>$dt->nim,
'nama'=>$dt->nama,
'umur'=>$dt->umur,
'alamat'=>$dt->alamat,
'kota'=>$dt->kota,
'jurusan'=>$dt->jurusan
];
}
return response()->json($balikan);

}
}
