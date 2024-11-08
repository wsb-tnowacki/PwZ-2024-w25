<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posty = Post::all();
        $posty = Post::paginate(10);
        return view('post.lista', compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
           $posty = new Post();
/*            $posty->tytul = request('tytul');
           $posty->autor = request('autor');
           $posty->email = request('email');
           $posty->tresc = request('tresc'); */
           $posty->save();
           return redirect()->route('post.index')->with('message', "Pomyślnie dodano post") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //$post = Post::findOrFail($id);
        return view('post.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
       // $post = Post::findOrFail($id);
        return view('post.edytuj', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostStoreRequest $request, Post $post)
    {
        //$post = Post::findOrFail($post->id);
/*         $post->tytul = request('tytul');
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc'); */
        //$post = $request;
        $post->update($request->validated());
        return redirect()->route('post.index')->with('message', "Pomyślnie zmieniono post") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       //$post = Post::findOrFail($post->id);
        $post->delete();
        return redirect()->route('post.index')->with('message', "Pomyślnie usunięto post")->with('class', 'danger') ;
    }
}
