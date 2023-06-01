<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Agama;
use App\Models\Lurah;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;


use illuminate\Http\Request;

class ContohController extends Controller
{
    function tentang() {
        $tanggal = date("d-m-Y");
        $data_warga = Warga::all();

        return view('tentang', [
            "tgl" => $tanggal,
            "data_warga" => $data_warga,
        ]);
    }
}