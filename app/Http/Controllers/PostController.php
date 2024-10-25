<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
/**
 * resep
 *
 * @return View
 */
public function resep(): View
{
 
    $posts = Post::latest()->paginate(5);

  
    return view('posts.recipe', compact('posts'));
}

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        
        $posts = Post::latest()->paginate(5);
        $userName = Auth::user()->name;
        

        
        return view('posts.index', compact('posts'), compact('userName') ) ;
    }

    

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
       
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'Bahan'     => 'required|min:10',
            'Tutorial'  => 'required|min:10'
        ]);

        
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

       
        Post::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'Bahan'     => $request->Bahan,
            'Tutorial'  => $request->Tutorial
        ]);

        
        return redirect()->route('recipe')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
       
        $post = Post::findOrFail($id);

        
        return view('posts.show', compact('post'));
    }
 /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
       
        $post = Post::findOrFail($id);

       
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
{
  
    $this->validate($request, [
        'image'     => 'nullable|image|mimes:jpeg,jpg,png|max:2048', 
        'title'     => 'required|min:5',
        'Bahan'     => 'required|min:10',
        'Tutorial'  => 'required|min:10'
    ]);

    
    $post = Post::findOrFail($id);

   
    if ($request->hasFile('image')) {
       
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        
        Storage::delete('public/posts/'.$post->image);
        
   
        $post->update([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'Bahan'     => $request->Bahan,
            'Tutorial'  => $request->Tutorial
        ]);
    } else {
        
        $post->update([
            'title'     => $request->title,
            'Bahan'     => $request->Bahan,
            'Tutorial'  => $request->Tutorial
        ]);
    }

    return redirect()->route('recipe')->with(['success' => 'Data Berhasil Diubah!']);
}
 /**
 * destroy
 *
 * @param  mixed $id
 * @return RedirectResponse
 */
public function destroy($id): RedirectResponse
{
    $post = Post::findOrFail($id);
    
    Storage::delete('public/posts/' . $post->image);
    
    $post->delete();

    return redirect()->route('recipe')->with(['success' => 'Data Berhasil Dihapus!']);
}

}
