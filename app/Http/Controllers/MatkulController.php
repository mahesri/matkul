<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;


class MatkulController extends Controller
{
    
    public function index(){

        $data = Matkul::allMatkul();
        return view('matkul.index', ['matkuls' => $data]);
    }

    public function addMatkul()
    {
        return view('matkul.addMatkul');
    }

    public function storeMatkul( Request $request)
    {
        Matkul::addMatkul($request->only(['name', 'code', 'credit']));
        return view('matkul/');
    }
}
