<?php

// jobsheet 3
// namespace App\Http\Controllers;

// use App\Models\UserModel;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\DB;


// class UserController extends Controller
// {
//     public function index()
//     {
//         // Tambah data user dengan Eloquent Model
//         $data = [
//             'nama' => 'Pelanggan pertama',
//             // 'username' => 'customer-1',
//             // 'nama' => 'Pelanggan',
//             // 'password' => Hash::make('12345'),
//             // 'level_id' => 5
//         ];
//         UserModel::where('username','customer-1')->update($data); //update data
//         // Tambahkan data ke tabel m_user
//         // UserModel::insert($data);

//         // Ambil semua data dari tabel m_user
//         $user = UserModel::all();

//         // Kirim data ke view 'user'
//         return view('user', ['data' => $user]);

//     }
// }


// jobsheet 4
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // prak 2.7
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);

        // prak 2.5
        // // Membuat instance model UserModel baru dan menyimpannya ke database
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager 11',
        //     'password' => Hash::make('12345'), // Enkripsi password
        //     'level_id' => 2,
        // ]);

        // // Mengubah nilai atribut username pada instance model
        // $user->username = 'manager12';

        // // Menyimpan perubahan ke database
        // $user->save();

        // // Memeriksa apakah ada perubahan pada model setelah disimpan
        // $user->wasChanged(); // true
        // $user->wasChanged('username'); // true
        // $user->wasChanged(['username', 'level_id']); // true
        // $user->wasChanged('nama'); // false

        // // Menampilkan hasil wasChanged()
        // dd($user->wasChanged(['nama', 'username'])); // true

        // prak 2.6
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        // Mencari user berdasarkan ID
        $user = UserModel::find($id);

        // Memperbarui atribut user dengan data dari request
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        // Menyimpan perubahan ke database
        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }


}
