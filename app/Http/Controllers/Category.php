<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    $cateories = Category::all();
    return view('backend.category.index');

}
