<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class LandingController extends Controller
{
    // function landing(Request $request)
    // {
    //     return view('landing', [
    //         "judul" => "Landing page",
    //         "peserta" => [
    //             "Fulan",
    //             "Fulanah",
    //             "Isman",
    //             "Endjie",
    //             "John Doe"
    //         ],
    //         "tampilkanPeserta" => true
    //     ]);
    // }
    function home()
    {
        return view('home', [
            "judul" => "Home"
        ]);
    }
    function feature()
    {
        return view('feature', [
            "judul" => "Feature"
        ]);
    }
    function whotowork()
    {
        return view('whotowork', [
            "judul" => "Who To Work"
        ]);
    }
    function pricing()
    {
        return view('pricing', [
            "judul" => "Pricing"
        ]);
    }
    function reviews()
    {
        return view('reviews', [
            "judul" => "Reviews"
        ]);
    }

    function upload(Request $request)
    {
        if ($request->method() == "GET") return view('upload');
        $file = $request->file("gambar");
        // $file->move("gambar", $file->getClientOriginalName()); // upload gambar dengan nama yang sama
        $file->move("gambar", $file->hashName()); // upload gambar & acak nama gambar (hash)
        $path = $request->getHost() . "/gambar/" . $file->hashName();
        // $path = $request->getSchemeAndHttpHost()."/gambar/".$file->hashName();
        return redirect()->back();
    }
}
