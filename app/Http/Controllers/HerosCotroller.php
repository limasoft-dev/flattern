<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HerosCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(){
        return Hero::orderBy('ordem')->get();
    }

     public function index()
    {
        $heros = Hero::orderBy('ordem')->get();
        return view ('sad.destaques.index',compact('heros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('sad.destaques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validação
        $data = $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'link' => 'url|max:255',
            'ordem' => 'required',
            'imagem' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
        $hero = new Hero;
        $hero->titulo = $data['titulo'];
        $hero->texto = $data['texto'];
        $hero->link = $data['link'];
        $hero->ordem = $data['ordem'];
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/destaques/';
            $img->move($path,$imgnome);
            $hero->imagem = $imgnome;
        }
        $hero->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('destaques.index'))->with('status', 'Destaque criado com sucesso!');
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
        $hero = Hero::findOrFail($id);
        return view ('sad.destaques.edit',compact('hero'));
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
        //Validação
        $data = $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'link' => 'url|max:255',
            'ordem' => 'required',
            'imagem' => 'image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
        $hero = new Hero;
        $hero->titulo = $data['titulo'];
        $hero->texto = $data['texto'];
        $hero->link = $data['link'];
        $hero->ordem = $data['ordem'];
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/destaques/';
            $img->move($path,$imgnome);
            Hero::where('id',$id)->update([
                'titulo' => $data['titulo'],
                'texto' => $data['texto'],
                'link' => $data['link'],
                'ordem' => $data['ordem'],
                'imagem' => $imgnome
            ]);
        } else {
            Hero::where('id',$id)->update([
                'titulo' => $data['titulo'],
                'texto' => $data['texto'],
                'link' => $data['link'],
                'ordem' => $data['ordem'],
            ]);
        }

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('destaques.index'))->with('status', 'Destaque criado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
