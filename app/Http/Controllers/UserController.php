<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::with('sekolah')->get();
        return view("user.list", compact('users')); //compact('users') setara dengan ["user" => $user]
    } // menampilkan seluruh data

    function detail($id)
    {
        $role = [
            ['id' => 1, 'role' => 'Admin'],
            ['id' => 2, 'role' => 'User'],
            ['id' => 3, 'role' => 'Guest'],
        ];

        $user = User::query()
            ->where("id", $id)
            ->first(); //select * from user where id = $id

        $sekolah = Sekolah::all(); //Select * from sekolah

        return view("user.detail", compact('user', 'sekolah', 'role'));
    } // menampilkan sebuah data (spesifik)

    function store()
    {
        $sekolah = Sekolah::all();
        return view("user.store", compact('sekolah'));
    } // tampilan menambah data

    function create(Request $request)
    {
        $payload = [
            "nama" => $request->input("nama"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
            "id_sekolah" => $request->input("id_sekolah"),
            "role" => $request->input("role")
        ];
        User::query()->create($payload); // insert into user bla bla bla ($payload)
        return redirect()->back()->with(['success' => 'Data tersimpan']); // redirect mbalek & kirim flashdata (session sekali pakai)
    } // menambahkan data

    function update(Request $request, $id)
    {
        $user = User::query()
            ->where('id', $id)
            ->first(); //panggil data

        $user->fill($request->all()); //isi sesuai apa yang diisi atau diubah user
        $user->save();

        return redirect()->back()->with(['success' => 'Data terupdate']);
    } // untuk update data

    function destroy($id)
    {
        $user = User::query()
            ->where("id", $id)
            ->delete();

        return redirect()->back()->with(['success' => 'Data terhapus']);
    } // menghapus data

}
