<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryManagerController extends Controller
{
    public function index()
    {
    }
    public function show($id)
    {
        $category = Category::find($id)->category;
        return view('pages.category.index', compact('category'));
    }
}
