<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::select('id','title','category')->get();
        return response()->json([
            'success' => true,
            'data' => $posts
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::select('id', 'title', 'category')->find($id);
        
        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Recipe not found'
            ], 404);
        }
    
        return response()->json([
            'success' => true,
            'data' => $post
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
