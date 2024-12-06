<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KreditController extends Controller
{
    public function kredit()
    {
        return view('kredit.kredit');
    }

    public function hitung(Request $request)
    {
        $otr = $request->input('otr');
        $dp_percentage = $request->input('dp');
        $jangka_waktu = $request->input('jangka_waktu');
        $client_name = $request->input('client_name');

        $dp = $otr * $dp_percentage / 100;

        $pokok_utang = $otr - $dp;

        if ($jangka_waktu <= 12) {
            $bunga = 12 / 100;
        } elseif ($jangka_waktu <= 24) {
            $bunga = 14 / 100;
        } elseif ($jangka_waktu >24) {
            $bunga = 16.5 / 100;
        }else {
            return back();
        }

        $angsuran_per_bulan = ($pokok_utang + ($pokok_utang * $bunga)) / $jangka_waktu;

        $last_contract = DB::table('angsuran')
            ->where('client_name', $client_name)
            ->orderBy('kontrak_no', 'desc')
            ->first();

        $last_contract_no = $last_contract ? intval(substr($last_contract->kontrak_no, 3)) : 0;
        $new_contract_no = 'AGR' . str_pad($last_contract_no + 1, 5, '0', STR_PAD_LEFT);

        $angsuran_data = [];
        $start_date = now();
        for ($i = 1; $i <= $jangka_waktu; $i++) {
            $angsuran = [
                'kontrak_no' => $new_contract_no,
                'client_name' => $client_name,
                'angsuran_ke' => $i,
                'angsuran_per_bulan' => $angsuran_per_bulan,
                'tanggal_jatuh_tempo' => $start_date->addMonth()->format('Y-m-d'),
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $angsuran_data[] = $angsuran;

            DB::table('angsuran')->insert($angsuran);
        }

        $data = [
            'kontrak_no' => $new_contract_no,
            'client_name' => $client_name,
            'otr' => number_format($otr, 0, ',', '.'),
            'angsuran_per_bulan' => number_format($angsuran_per_bulan, 0, ',', '.'),
            'angsuran_data' => array_map(function ($item) {
                $item['angsuran_per_bulan'] = number_format($item['angsuran_per_bulan'], 0, ',', '.');
                return $item;
            }, $angsuran_data),
        ];

        return view('kredit.hasil', compact('data'));
    }
}
