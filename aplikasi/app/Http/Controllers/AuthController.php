<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\DataPengguna;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login()
    {
        return view('website.Login.index');
    }

    public function Register()
    {
        return view('website.Login.Register');
    }

    public function proses_Register(Request $request)
    {
        $messages = [
            'username.required' => 'Username wajib diisi.',
            'username.min' => 'Username harus minimal :min karakter.',
            'username.max' => 'Username tidak boleh lebih dari :max karakter.',
            'username.regex' => 'Username hanya boleh berisi huruf dan spasi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus minimal :min karakter.',
            'password.max' => 'Password tidak boleh lebih dari :max karakter.',
            'Role.required' => 'Role wajib diisi.',
            'Role.string' => 'Role harus berupa string.',
            'Role.in' => 'Role harus salah satu dari Bidan, Kader, atau Pengguna.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'nik.required' => 'NIK wajib diisi.',
            'nik.numeric' => 'NIK harus berupa angka.',
            'nik.digits' => 'NIK harus terdiri dari :digits digit.',
            'foto.image' => 'Foto harus berupa gambar.',
            'nama_anak.required' => 'Nama anak wajib diisi.',
            'nama_anak.regex' => 'Nama anak hanya boleh berisi huruf dan spasi.',
            'usia.required' => 'Usia wajib diisi.',
            'usia.integer' => 'Usia harus berupa angka bulat.',
            'usia.min' => 'Usia harus minimal :min Tahun.',
            'usia.max' => 'Usia tidak boleh lebih dari :max Tahun.',
            'nama_ibu.required' => 'Nama orangtua wajib diisi.',
            'nama_ibu.regex' => 'Nama orangtua harus berupa huruf.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.regex' => 'Alamat harus berupa huruf.',
            'desa.required' => 'Desa wajib diisi.',
            'desa.regex' => 'Desa harus berupa huruf.',
            'kecamatan.required' => 'Kecamatan wajib diisi.',
            'kecamatan.regex' => 'Kecamatan harus berupa huruf.',
            'rt.required' => 'RT wajib diisi.',
            'rt.numeric' => 'RT harus berupa angka.',
            'rw.required' => 'RW wajib diisi.',
            'rw.numeric' => 'RW harus berupa angka.',
            'no_hp.required' => 'No HP wajib diisi.',
            'no_hp.numeric' => 'No HP harus berupa angka.',
            'posyandu.required' => 'Nama posyandu wajib diisi.',
            'posyandu.regex' => 'Nama posyandu harus berupa huruf.'
        ];

        $request->validate([
            'username' => 'required|min:5|max:15|string|regex:/^[a-zA-Z\s]*$/',
            'password' => 'required|min:6',
            'Role' => 'required|string|in:Bidan,Kader,Pengguna',
            'email' => 'required|email',
            'nik' => 'required|numeric|digits:16',
            'foto' => 'nullable|image',
            'nama_anak' => 'required|regex:/^[a-zA-Z\s]*$/',
            'usia' => 'required|integer|min:1|max:5',
            'nama_ibu' => 'required|regex:/^[a-zA-Z\s]*$/',
            'alamat' => 'required|string',
            'desa' => 'required|regex:/^[a-zA-Z\s]*$/',
            'kecamatan' => 'required|regex:/^[a-zA-Z\s]*$/',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'posyandu' => 'required|regex:/^[a-zA-Z\s]*$/'
        ], $messages);

        try {
            DB::beginTransaction();

            $akun = Akun::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'Role' => $request->Role,
                'email' => $request->email
            ]);

            $foto = $request->file('foto');
            $id = $akun->id;

            if ($foto) {
                $extension = $foto->getClientOriginalExtension();
                $nama = $id . '.' . $extension;
                $foto->move('public/Register_image', $nama);
            }

            DataPengguna::create([
                'Nik' => $request->nik,
                'Foto' => isset($nama)? $nama : 'default.jpg',
                'Nama_anak' => $request->nama_anak,
                'Usia' => $request->usia,
                'Nama_ibu' => $request->nama_ibu,
                'Alamat' => $request->alamat,
                'Desa' => $request->desa,
                'Kecamatan' => $request->kecamatan,
                'Rt' => $request->rt,
                'Rw' => $request->rw,
                'No_Hp' => $request->no_hp,
                'Nama_posyandu' => $request->posyandu,
                'Akun_idAkun' => $akun->id
            ]);

            DB::commit();

            return view('website.Login.Login')->with('success', 'Selamat data anda telah tersiman');
        } catch (Exception $e) {
            $nama = $request->file('foto');

            DB::rollback();
            return back()->withInput();
        }
    }

    public function Authenticate(Request $request)
    {
        $messages = [
            'email.required' => 'Username wajib diisi.',
            'password.required' => 'Username wajib diisi.'
        ];

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], $messages);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $Role = Auth::user()->Role;
            if ($Role == 'Pengguna') {
                return redirect()->intended('user');
            } elseif ($Role == 'Bidan') {
                return redirect()->intended('Admin');
            }elseif ($Role == 'Kader') {
                return redirect()->intended('Admin');
            }
        } else {
            return back()->with('gagal', 'Password atau username salah')->withInput();
        }
    }

    public function Logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
