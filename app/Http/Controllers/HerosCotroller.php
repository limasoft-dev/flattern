<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HerosCotroller extends Controller
{
    //For api
    public function getData(){
        return Hero::orderBy('ordem')->get();
    }

    public function index()
    {
        $heros = Hero::orderBy('ordem')->get();
        return view ('adm.destaques.index',compact('heros'));
    }

    public function create()
    {
        return view ('adm.destaques.create');
    }

    public function store(Request $request)
    {
        //Validação
        $data = $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'link' => 'nullable|url|max:255',
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

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view ('adm.destaques.edit',compact('hero'));
    }

    public function update(Request $request, $id)
    {
        //Validação
        $data = $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'link' => 'nullable|url|max:255',
            'ordem' => 'required',
            'imagem' => 'image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
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

    public function destroy($id)
    {
        Hero::where('id',$id)->delete();
        return redirect(route('destaques.index'))->with('status', 'Destaque eliminado com sucesso!');
    }
}
