<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    function index()
    {
        $sekolahs = Sekolah::query()
            ->get(); //select * from sekolah
        return view("sekolah.list", ["sekolahs" => $sekolahs]);
    } // menampilkan seluruh data

    function detail($id)
    {
        $sekolah = Sekolah::query()
            ->where("id", $id)
            ->first(); //select * from sekolah where id = $id
        return view("sekolah.detail", ["sekolah" => $sekolah]);
    } // menampilkan sebuah data (spesifik)

    function store()
    {
        return view("sekolah.store");
    } // tampilan menambah data

    function create(Request $request)
    {
        $payload = [
            "nama_sekolah" => $request->input("nama_sekolah"),
            "alamat_sekolah" => $request->input("alamat_sekolah"),
            "email_sekolah" => $request->input("email_sekolah")
        ];
        Sekolah::query()->create($payload); // insert into sekolah bla bla bla ($payload)
        return redirect()->back()->with(['success' => 'Data tersimpan']); // redirect mbalek
    } // menambahkan data

    function update(Request $request, $id)
    {
        $sekolah = Sekolah::query()
            ->where('id', $id)
            ->first(); //panggil data

        $sekolah->fill($request->all()); //isi sesuai apa yang diisi atau diubah sekolah
        $sekolah->save();

        return redirect()->back()->with(['success' => 'Data terupdate']);
    } // untuk update data

    function destroy($id)
    {
        $sekolah = Sekolah::query()
            ->where("id", $id)
            ->delete();

        return redirect()->back()->with(['success' => 'Data terhapus']);
    } // menghapus data
}
