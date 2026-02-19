<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function books() {
    $mangas = [
        'Angel Beats',
        'One piece',
        'Blue box',
        'Fragrant flower blooms with dignity',
        'Jujutsu Kaisen'
    ];
    return view('book',['mangas' => $mangas]);
    }
}