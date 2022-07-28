<?php

namespace App\Http\Controllers;

use App\Models\Post as ModelPost;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class Post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=ModelPost::get();

        return view('index', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelPost::create([
         'titulo' => $request->titulo,
         'conteudo' => $request->conteudo
        ]);
        return redirect()->route('post.index')->with('message', 'Cadastro realizado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = ModelPost::find($id);

        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = ModelPost::find($id);

        $post->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo
        ]);

        return redirect()->route('post.index')->with('message', 'Cadastro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelPost::find($id)->delete();

        return redirect()->route('post.index')->with('message', 'Post deletado');
    }
}
