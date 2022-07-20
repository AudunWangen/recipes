<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Remove line below
use Illuminate\Support\Facades\DB;

class RecipesController extends Controller
{
    public function index() {
        // $posts = DB::select('select * from recipes');
        // dd($posts);

        return view('recipes.index');
    }

    public function show($id) {
        return view('recipes.show', [
            
        ]);
    }
}
