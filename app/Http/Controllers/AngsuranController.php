<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AngsuranController extends Controller
{
    public function angsuran()
    {
        return view('angsuran.angsuran');
    }

    public function hitung(Request $request)
    {
        $client_name = $request->input('client_name');
        $jangka_waktu = $request->input('tanggal_jatuh_tempo');

        $data = DB::table('angsuran')
            ->select('kontrak_no', 'client_name', DB::raw('SUM(angsuran_per_bulan) AS total_angsuran_jatuh_tempo'))
            ->where('client_name', $client_name)
            ->where('tanggal_jatuh_tempo', '<=', $jangka_waktu)
            ->groupBy('kontrak_no', 'client_name')
            ->get();

        return view('angsuran.hitung', ['data' => $data]);
    }
}
