<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function pendaftaran()
    {
        return view('page.daftar');
    }
    public function welcome(Request $request)
    {
        $fullname = $request->input('fullname');
        $address = $request->input('address');

        return view('page.dashboard', ['fullname' => $fullname, 'address' => $address]);
    }
}
