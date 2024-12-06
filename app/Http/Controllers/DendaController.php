<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DendaController extends Controller
{
    public function denda()
    {
        return view('denda.denda');
    }

    public function hitung(Request $request)
    {
        $tanggalAkhir = $request->tanggal_akhir;

        $data = DB::table('angsuran')
            ->select(
                'kontrak_no',
                'client_name',
                DB::raw('SUM(angsuran_per_bulan) AS total_angsuran_belum_terbayar'),
                DB::raw("SUM(angsuran_per_bulan * 0.001 * (DATE '$tanggalAkhir' - tanggal_jatuh_tempo)) AS total_denda")
            )
            ->where('client_name', $request->client_name)
            ->where('status_pembayaran', $request->status_pembayaran)
            ->whereBetween('tanggal_jatuh_tempo', [$request->tanggal_awal, $request->tanggal_akhir])
            ->groupBy('kontrak_no', 'client_name')
            ->get();

        return view('denda.hitung', [
            'data' => $data,
        ]);
    }
}
