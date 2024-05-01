<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.user.user');
    }

    public function Riwayatposyandu()
    {
        return view('website.user.Riwayatposyandu');
    }

    public function Riwayatimunisasi()
    {
        return view('website.user.Riwayatimunisasi');
    }

    public function Riwayatkesehatan()
    {
        return view('website.user.Riwayatkesehatan');
    }

    public function Dataanak()
    {
        return view('website.user.Dataanak');
    }

    public function Quisioner()
    {
        return view('website.user.quisioner');
    }

    public function hasil(Request $request)
    {
        $parameter = $request->query('parameter');
        return view('website.solusi.pdf_solusi', compact('parameter'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //======Mengambil Request Form =======//
        $Jawaban_1 = $request->p1;
        $Jawaban_2 = $request->p2;
        $Jawaban_3 = $request->p3;
        $Jawaban_4 = $request->p4;
        $Jawaban_5 = $request->p5;
        $Jawaban_6 = $request->p6;
        $Jawaban_7 = $request->p7;
        $Jawaban_8 = $request->p8;
        $Jawaban_9 = $request->p9;
        $Jawaban_10 = $request->p10;
        $Jawaban_11 = $request->p11;
        $Jawaban_12 = $request->p12;
        $Jawaban_13 = $request->p13;
        $Jawaban_14 = $request->p14;
        $Jawaban_15 = $request->p15;
        $Jawaban_16 = $request->p16;
        $Jawaban_17 = $request->p17;
        $Jawaban_18 = $request->p18;
        $Jawaban_19 = $request->p19;
        $Jawaban_20 = $request->p20;
        $Jawaban_21 = $request->p21;
        $Jawaban_22 = $request->p22;
        $Jawaban_23 = $request->p23;
        $Jawaban_24 = $request->p24;
        $Jawaban_25 = $request->p25;
        $Jawaban_26 = $request->p26;
        $Jawaban_27 = $request->p27;
        $Jawaban_28 = $request->p28;
        //======Mengambil Request Form =======//


        //========== Menampilkan Inputan Form ============//
        $Nilai_input = [
            $Jawaban_1, $Jawaban_2, $Jawaban_3, $Jawaban_4, $Jawaban_5,
            $Jawaban_6, $Jawaban_7, $Jawaban_8, $Jawaban_9, $Jawaban_10,
            $Jawaban_11, $Jawaban_12, $Jawaban_13, $Jawaban_14,
            $Jawaban_15, $Jawaban_16, $Jawaban_17, $Jawaban_18, $Jawaban_19,
            $Jawaban_20, $Jawaban_21, $Jawaban_22, $Jawaban_23, $Jawaban_24,
            $Jawaban_25, $Jawaban_26, $Jawaban_27, $Jawaban_28
        ];
        //========== Menampilkan Inputan Form ============//


        //========== Mengubah inputan ke Nilai ============//
        $jawaban = [
            $Jawaban_1, $Jawaban_2, $Jawaban_3, $Jawaban_4, $Jawaban_5,
            $Jawaban_6, $Jawaban_7, $Jawaban_8, $Jawaban_9, $Jawaban_10,
            $Jawaban_11, $Jawaban_12, $Jawaban_13, $Jawaban_14, $Jawaban_15,
            $Jawaban_16, $Jawaban_17, $Jawaban_18, $Jawaban_19, $Jawaban_20,
            $Jawaban_21, $Jawaban_22, $Jawaban_23, $Jawaban_24, $Jawaban_25,
            $Jawaban_26, $Jawaban_27, $Jawaban_28
        ];

        for ($i = 0; $i < count($jawaban); $i++) {
            switch ($jawaban[$i]) {
                case 'Sangat Benar':
                    $jawaban[$i] = 4;
                    break;
                case 'Benar':
                    $jawaban[$i] = 3;
                    break;
                case 'Kurang Benar':
                    $jawaban[$i] = 2;
                    break;
                case 'Tidak Benar':
                    $jawaban[$i] = 1;
                    break;
                default:
                    $jawaban[$i] = 0;
                    break;
            }
        }

        $Urgensi = [0.4, 0.3, 0.2, 0.1];

        $Lingkungan =
            ($jawaban[0] * $Urgensi[0]) +
            ($jawaban[1] * $Urgensi[1]) +
            ($jawaban[2] * $Urgensi[2]) +
            ($jawaban[3] * $Urgensi[3]);

        $polaAsuh =
            ($jawaban[4] * $Urgensi[0]) +
            ($jawaban[5] * $Urgensi[1]) +
            ($jawaban[6] * $Urgensi[2]) +
            ($jawaban[7] * $Urgensi[3]);

        $kesehatanAnak =
            ($jawaban[8] * $Urgensi[0]) +
            ($jawaban[9] * $Urgensi[1]) +
            ($jawaban[10] * $Urgensi[2]) +
            ($jawaban[11] * $Urgensi[3]);

        $kesehatanIbu =
            ($jawaban[12] * $Urgensi[0]) +
            ($jawaban[13] * $Urgensi[1]) +
            ($jawaban[14] * $Urgensi[2]) +
            ($jawaban[15] * $Urgensi[3]);

        $pengetahuanOrtu =
            ($jawaban[16] * $Urgensi[0]) +
            ($jawaban[17] * $Urgensi[1]) +
            ($jawaban[18] * $Urgensi[2]) +
            ($jawaban[19] * $Urgensi[3]);

        $kurangGizi_Hamil =
            ($jawaban[20] * $Urgensi[0]) +
            ($jawaban[21] * $Urgensi[1]) +
            ($jawaban[22] * $Urgensi[2]) +
            ($jawaban[23] * $Urgensi[3]);

        $polaMakan_balita =
            ($jawaban[24] * $Urgensi[0]) +
            ($jawaban[25] * $Urgensi[1]) +
            ($jawaban[26] * $Urgensi[2]) +
            ($jawaban[27] * $Urgensi[3]);

        $total = $Lingkungan + $polaAsuh + $kesehatanAnak + $kesehatanIbu + $pengetahuanOrtu + $kurangGizi_Hamil + $polaMakan_balita;

        $presentase_Ligkungan = ($Lingkungan / $total) * 100;
        $presentase_polaAsuh = ($polaAsuh / $total) * 100;
        $presentase_kesehatanAnak = ($kesehatanAnak / $total) * 100;
        $presentase_kesehatanIbu = ($kesehatanIbu / $total) * 100;
        $presentase_pengetahuanOrtu = ($pengetahuanOrtu / $total) * 100;
        $presentase_kurangGizi_Hamil = ($kurangGizi_Hamil / $total) * 100;
        $presentase_polaMakan_balita = ($polaMakan_balita / $total) * 100;


        $tampilHasil_lingkungan = [
            'Lingkungan',
            '( ' . $jawaban[0] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[1] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[2] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[3] . ' * ' . $Urgensi[3] . ' )', $Lingkungan, $presentase_Ligkungan
        ];

        $tampilHasil_polaAsuh = [
            'Pola Asuh',
            '( ' . $jawaban[4] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[5] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[6] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[7] . ' * ' . $Urgensi[3] . ' )', $polaAsuh, $presentase_polaAsuh
        ];

        $tampilHasil_kesehatanAnak = [
            'Kesehatan Anak',
            '( ' . $jawaban[8] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[9] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[10] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[11] . ' * ' . $Urgensi[3] . ' )', $kesehatanAnak, $presentase_kesehatanAnak
        ];

        $tampilHasil_kesehatanIbu = [
            'Kesehatan Ibu',
            '( ' . $jawaban[12] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[13] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[14] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[15] . ' * ' . $Urgensi[3] . ' )', $kesehatanIbu, $presentase_kesehatanIbu
        ];

        $tampilHasil_pengetahuanOrtu = [
            'Pengetahuan Orangtua',
            '( ' . $jawaban[16] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[17] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[18] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[19] . ' * ' . $Urgensi[3] . ' )', $pengetahuanOrtu, $presentase_pengetahuanOrtu
        ];

        $tampilHasil_kurangGiziHamil = [
            'Kurang Gizi saat Hamil',
            '( ' . $jawaban[20] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[21] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[22] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[23] . ' * ' . $Urgensi[3] . ' )', $kurangGizi_Hamil, $presentase_kurangGizi_Hamil
        ];

        $tampilHasil_polaMakanBalita = [
            'Pola Makan Balita',
            '( ' . $jawaban[24] . ' * ' . $Urgensi[0] . ' )' . ' + ' .
                '( ' . $jawaban[25] . ' * ' . $Urgensi[1] . ' )' . ' + ' .
                '( ' . $jawaban[26] . ' * ' . $Urgensi[2] . ' )' . ' + ' .
                '( ' . $jawaban[27] . ' * ' . $Urgensi[3] . ' )', $polaMakan_balita, $presentase_polaMakan_balita
        ];

        $data = [
            $tampilHasil_lingkungan,
            $tampilHasil_polaAsuh,
            $tampilHasil_kesehatanAnak,
            $tampilHasil_kesehatanIbu,
            $tampilHasil_pengetahuanOrtu,
            $tampilHasil_kurangGiziHamil,
            $tampilHasil_polaMakanBalita
        ];

        $data = collect($data)->sortByDesc(function ($item) {
            return $item[2];
        })->values()->all();

        return view('website.user.Hasil', compact('Nilai_input', 'jawaban', 'Urgensi', 'tampilHasil_lingkungan', 'data', 'presentase_Ligkungan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
