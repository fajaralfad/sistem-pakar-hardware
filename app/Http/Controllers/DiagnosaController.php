<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Kerusakan;
use App\Models\Gejala;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function diagnosa(Request $request)
    {
        // Ambil input gejala dari pengguna
        $inputGejala = $request->input('gejala'); // Array of gejala IDs
        $hasilDiagnosa = [];

        // Ambil aturan yang relevan berdasarkan gejala
        $aturan = Aturan::whereIn('gejala_id', $inputGejala)->get();

        // Hitung CF untuk setiap kerusakan
        foreach ($aturan as $rule) {
            $kerusakanId = $rule->kerusakan_id;
            $nilaiKepercayaan = $rule->nilai_kepercayaan;

            if (!isset($hasilDiagnosa[$kerusakanId])) {
                $hasilDiagnosa[$kerusakanId] = 0;
            }

            // CF(E) diasumsikan 1 (pengguna yakin gejala ada)
            $cfE = 1;
            $hasilDiagnosa[$kerusakanId] += $cfE * $nilaiKepercayaan;
        }

        // Ambil detail kerusakan
        $kerusakanDetail = [];
        foreach ($hasilDiagnosa as $kerusakanId => $cf) {
            $kerusakan = Kerusakan::find($kerusakanId);
            $kerusakanDetail[] = [
                'kerusakan' => $kerusakan->nama_kerusakan,
                'deskripsi' => $kerusakan->deskripsi,
                'cf' => $cf,
            ];
        }

        // Urutkan berdasarkan CF tertinggi
        usort($kerusakanDetail, fn($a, $b) => $b['cf'] <=> $a['cf']);

        return response()->json($kerusakanDetail);
    }

    // Menampilkan halaman Diagnosa dengan data gejala
    public function index()
    { 
        $gejalas = Gejala::all();
        return view('diagnosa', compact('gejalas'));
    }
}
