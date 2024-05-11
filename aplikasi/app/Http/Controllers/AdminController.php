<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\DataPengguna;
use App\Models\dataSolusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Menampilkan dasboard Admin
     */
    public function index()
    {
        $dataLogin = Auth::user();
        
        $query = dataSolusi::all();
        $bidan = Akun::where('Role', 'like', '%Bidan%')->get();
        $kader = Akun::where('Role', 'like', '%Kader%')->get();
        $pengguna = Akun::where('Role', 'like', '%Pengguna%')->get();
        $dataPengguna = DataPengguna::all();
        $banyakPengguna = DataPengguna::count();

        return view('website.Admin.Dashboard', compact('query', 'bidan', 'kader', 'pengguna', 'dataPengguna','banyakPengguna'))
        ->with('dataLogin', $dataLogin);;
    }


    /**
     * Kontroler Untuk mengurusi data akun
     */
    public function dataBidan()
    {
        $id = 'Bidan';
        $dataAkun = Akun::where('Role', 'like', '%Bidan%')->get();
        return view('website.Admin.dataAkun', compact('dataAkun', 'id'));

    }

    public function dataKader()
    {
        $id = "Kader";
        $dataAkun = Akun::where('Role', 'like', '%Kader%')->get();
        return view('website.Admin.dataAkun', compact('dataAkun','id'));
    }

    public function dataPengguna()
    {
        $id = "Pengguna";
        $dataAkun = Akun::where('Role', 'like', '%Pengguna%')->get();
        return view('website.Admin.dataAkun', compact('dataAkun', 'id'));
    }


    /**
     * Kontroler Untuk menampilkan Halaman Form
     */
    public function create_Bidan()
    {
        $id = 'Bidan';
        return view('website.Admin.formAkun', compact('id'));

    }

    public function create_Kader()
    {
        $id = 'Kader';
        return view('website.Admin.formAkun', compact('id'));

    }


    /**
     * Kontroler Untuk membuat Inputan Akun
     */
    public function store(Request $request)
    {
        $Username = $request->username;
        $Password = md5(sha1(md5($request->password)));
        $Role = $request->role;

        Akun::create(['Username'=> $Username, 'Password' => $Password, 'Role'=> $Role]);
        return redirect('Data-'.$Role)->with('Success', 'Berhasil Menambahkan akun');
    }


    /**
     * Kontroler Untuk Menampilkan Form Edit Akun dan data lama
     */
    public function edit_Akun(string $id)
    {
        $query = Akun::where('idAkun', $id)->first();
        return view('website.Admin.formEdit_Akun', compact('query'));
    }

    /**
     * Kontroler Untuk Update data Lama
     */
    public function update_Akun(Request $request, string $id)
    {
        $username = $request->username;
        $password = $request->password;
        $role = $request->role;

       Akun::where('idAkun', $id)->update([
        'Username' => $username,
        'Password' => $password,
        'Role' => $role 
       ]);

       return redirect('Admin');
    }


    /**
     * Kontroler Untuk Menampilkan koleksi data solusi
     */
    public function Solusi()
    {
        $query = dataSolusi::all();
        return view('website.Admin.Solusi', compact('query'));
    }
    

    /**
     * Kontroler Untuk Menampilkan pdf solusi
     */
    public function show(string $id)
    {
        return view('website.Admin.ShowSolusi', compact('id'));
    }

    /**
     * Kontroller untuk Menampilkan form edit solusi
     */
    public function edit(string $id)
    {
        $query = dataSolusi::where('idSolusi', $id)->first();
        return view('website.Admin.formSolusi', compact('query'));
    }

    /**
     * Kontroler untuk melakukan update pdf solusi
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'file|mimes:pdf',
        ]);

        if ($validator->fails()) {
            return back()->with('Error', 'Hanya boleh mengupload file PDF.');
        }


        $input_Faktorpenyebab = $request->Faktorpenyebab;
        $Nama_ekstensi = $input_Faktorpenyebab . '.pdf';

        $file = $request->file('file');


        if (Storage::exists($file)) {
            !unlink($file);
            $file->move('public/File_solusi', $Nama_ekstensi);
        } else {
            $file->move('public/File_solusi', $Nama_ekstensi);
        }

        DB::table('solusi')
            ->where('idSolusi', $id)
            ->update(['Nama_file' => $Nama_ekstensi]);

        return redirect('Solusi')->with('success', 'File PDF berhasil diunggah.');
    }

    /**
     * Kontroler Untuk Menghapus pdf solusi
     */
    public function destroy(string $id)
    {

        $query = dataSolusi::select('Nama_file')->where('idSolusi', $id)->first();
        $query = $query->Nama_file;
        $file = 'public/File_solusi/' . $query;

        // Hapus file
        !unlink($file);

        DB::table('solusi')
            ->where('idSolusi', $id)
            ->update(['Nama_file' => null]);

        return redirect('Solusi')->with('success', 'File PDF berhasil diunggah.');
    }

    /**
     * Kontroler Untuk Menampilkan koleksi data pengguna
     */
    public function Pengguna()
    {
        $data = DataPengguna::all();
        return view('website.Admin.dataPengguna', compact('data'));
    }


    /**
     * Kontroler Untuk menghapus data diri pengguna
     */
    public function destroy_Pengguna(string $id)
    {

        DataPengguna::where('iddataPengguna', $id)->delete();
        return redirect('Pengguna')->with('success', 'Berhasil Menghapus data.');
    }

    /**
     * Kontroler Untuk Menghapus akun
     */
    public function destroy_Akun(string $id)
    {

        Akun::where('idAkun', $id)->delete();
        return redirect('Admin')->with('success', 'Berhasil Menghapus data.');
    }
}
