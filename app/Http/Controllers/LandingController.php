<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
