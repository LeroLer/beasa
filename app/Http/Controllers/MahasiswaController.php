<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnValue;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => "maman", 'foto' => "m4n.jpg"];
        $mahasiswa = DB::table('mahasiswa')->get();
        return view ('mahasiswa.index', compact('data', 'mahasiswa'));
    }

    public function show($id)
    {
        // Logika tod
    }
}