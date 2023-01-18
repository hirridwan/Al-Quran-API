<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SuratController extends Controller
{
    public function index()
    {
        $response = Http::get('https://equran.id/api/surat');
        $data = $response->json();
        return view('index',compact('data'));
    }

    public function detail(Request $request)
    {
        $response = Http::get('https://equran.id/api/surat/'. $request->nomor);
        $data = $response->json();
        return view('detail',compact('data'));
    }
}