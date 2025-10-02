<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class GaleriController extends Controller
{
    public function index(){
        $data = Galeri::all();
        Return view("galeri", compact('data'));
    }
}
