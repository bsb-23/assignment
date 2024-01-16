<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        return Blog::all();
    }

    public function show($id)
    {
        return Blog::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Blog::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return $blog;
    }
}
