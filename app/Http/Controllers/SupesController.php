<?php

namespace App\Http\Controllers;

use App\Supe;
use Illuminate\Http\Request;

class SupesController extends Controller
{
    public function index()
    {
        $supes = Supe::all();
        
        return view('supes.supes', ['supes' => $supes]);
    }

    public function show($id_supe,$supe)
    {
        $supe = Supe::find($id_supe);

        return view('supes.supe',['supe' => $supe]);
    }
}
