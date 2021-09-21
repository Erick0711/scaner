<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scaner;
class ScanerController extends Controller
{
    public function index(){
        $scanerss = Scaner::all();
        return view ('scaner/registro')->with('scanerss',$scanerss);
    }
    public function detalle(){
        $scaners = Scaner::all();
        return view ('scaner/detalle')->with('scaners',$scaners);;
    }
}
