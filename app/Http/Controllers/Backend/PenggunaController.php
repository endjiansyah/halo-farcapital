<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    //
    // CRUD
    // List =>index
    // Detail=> show
    // Create =>store
    // Edit=> update
    // Delete =>destroy

    function index()
    {
        $pengguna = Pengguna::query()->get();
        return response()->json([
            "status" => true,
            "message" => "",
            "data" => $pengguna
        ]);
    }

    function show($id)
    {
        $pengguna = Pengguna::query()
            ->where("id", $id)
            ->first();
        if ($pengguna == null) {
            return response()->json([
                "status" => false,
                "message" => "pengguna tidak ditemukan",
                "data" => null
            ]);
        }

        return response()->json([
            "status" => true,
            "message" => "",
            // "data" => $pengguna
            "data" => [
                "name" => $pengguna->name,
                "email" => $pengguna->email
            ]
        ]);
    }

    function store(Request $request)
    {
        $payload = $request->all();
        if (!isset($payload["name"])) {
            return response()->json([
                "status" => false,
                "message" => "Harus ada name",
                "data" => null
            ]);
        }

        if (!isset($payload["email"])) {
            return response()->json([
                "status" => false,
                "message" => "Harus ada email",
                "data" => null
            ]);
        }

        if (!isset($payload["password"])) {
            return response()->json([
                "status" => false,
                "message" => "Harus ada password",
                "data" => null
            ]);
        }

        $pengguna = Pengguna::query()->create($payload);
        return response()->json([
            "status" => true,
            "message" => "nyoh data",
            "data" => $pengguna
        ]);
    }

    function update(Request $request, $id)
    {
        $pengguna = Pengguna::query()
            ->where("id", $id)
            ->first();
        if ($pengguna == null) {
            return response()->json([
                "status" => false,
                "message" => "pengguna tidak ditemukan",
                "data" => null
            ]);
        }

        $pengguna->fill($request->all());
        $pengguna->save();

        return response()->json([
            "status" => true,
            "message" => "data berubah",
            "data" => $pengguna
        ]);
    }

    function destroy($id)
    {
        $pengguna = Pengguna::query()
            ->where("id", $id)
            ->first();
        if ($pengguna == null) {
            return response()->json([
                "status" => false,
                "message" => "pengguna tidak ditemukan",
                "data" => null
            ]);
        }
        $pengguna = Pengguna::query()
            ->where("id", $id)
            ->first()
            ->delete();

        return response()->json([
            "status" => true,
            "message" => "pengguna ilang",
            "data" => null
        ]);
    }
}
