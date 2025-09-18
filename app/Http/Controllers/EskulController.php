<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EskulController extends Controller
{
    public function index(){
        $data = Eskul::all();
        Return view("ektrakulikuler", compact('data'));
    }
}
