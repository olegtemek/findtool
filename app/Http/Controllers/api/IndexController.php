<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function store(Request $req)
    {
        Company::create($req->only(['title', 'number', 'portfolio', 'link', 'offer', 'find', 'category_id']));
        return response()->json([
            'status' => 200,
        ]);
    }
    public function getAllCategories()
    {
        return response()->json([
            'status' => 200,
            'categories' => Category::all()
        ]);
    }

    public function getAllCompanies()
    {
        return response()->json([
            'status' => 200,
            'companies' => Company::where('active', true)->orderBy('position', 'desc')->orderBy('id', 'asc')->get()
        ]);
    }
    public function getCompaniesSlug(Request $req)
    {
        $category = Category::where('slug', $req->slug)->first();
        return response()->json([
            'status' => 200,
            'companies' => Company::where('category_id', $category->id)->where('active', true)->orderBy('position', 'desc')->orderBy('id', 'asc')->get()
        ]);
    }
}
