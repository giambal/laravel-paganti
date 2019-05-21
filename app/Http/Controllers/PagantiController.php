<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagantiController extends Controller{
  public function getPaganti(){

    $paganti = DB::table('paganti')
                        ->selectRaw('id, name, lastname')
                        ->get();

    // dd($paganti);
    return view('content', compact('paganti'));
  }

  public function getPagantiById($id){

    $pagante = DB::table('paganti')
                        ->selectRaw('id, name, lastname')
                        ->where('id', '=', '$id')
                        ->get();

    dd($pagante);
    // return view('contentwo', compact('paganti'));
  }
}
