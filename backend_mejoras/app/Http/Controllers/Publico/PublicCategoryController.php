<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use App\Models\Category;

class PublicCategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
}
