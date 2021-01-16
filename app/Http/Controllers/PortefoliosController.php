<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Config;
use App\Models\Portefolio;
use Illuminate\Http\Request;

class PortefoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPortefolios()
    {
        return Portefolio::all();
    }

    public function index()
    {
        $categorias = Categoria::orderBy('categoria')->get();
        $dados = Config::findOrFail(1);
        return view ('adm.portefolios.index',compact('categorias','dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('categoria')->get();
        return view ('adm.portefolios.create',compact('categorias'));
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
            'desenvolvimento' => 'nullable',
            'categoria' => 'required|exists:categorias,id',
            'imagem' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
        $portefolio = new portefolio;
        $portefolio->titulo = $data['titulo'];
        $portefolio->texto = $data['texto'];
        $portefolio->desenvolvimento = $data['desenvolvimento'];
        $portefolio->categoria_id = $data['categoria'];
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/portfolio/';
            $img->move($path,$imgnome);
            $portefolio->imagem = $imgnome;
        }
        $portefolio->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('portefolios.index'))->with('status', 'Item de portefólio criado com sucesso!');
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
        $categorias = Categoria::orderBy('categoria')->get();
        $portefolio = Portefolio::findOrFail($id);
        return view ('adm.portefolios.edit',compact('categorias','portefolio'));
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
            'desenvolvimento' => 'nullable',
            'categoria' => 'required|exists:categorias,id',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/portfolio/';
            $img->move($path,$imgnome);
            Portefolio::where('id',$id)->update([
                'titulo' => $data['titulo'],
                'texto' => $data['texto'],
                'desenvolvimento' => $data['desenvolvimento'],
                'categoria_id' => $data['categoria'],
                'imagem' => $imgnome
            ]);
        } else {
            Portefolio::where('id',$id)->update([
                'titulo' => $data['titulo'],
                'texto' => $data['texto'],
                'desenvolvimento' => $data['desenvolvimento'],
                'categoria_id' => $data['categoria'],
            ]);
        }

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('portefolios.index'))->with('status', 'Item de portefólio editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portefolio::where('id',$id)->delete();
        return redirect(route('portefolios.index'))->with('status', 'Item de portefólio eliminado com sucesso!');
    }
}
