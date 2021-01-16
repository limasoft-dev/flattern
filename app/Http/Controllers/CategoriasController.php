<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getcategorias()
    {
        return Categoria::all();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adm.categorias.create');
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
            'categoria' => 'required|max:255|unique:categorias,categoria',
        ]);
        //Gravar na BD
        $categoria = new Categoria();
        $categoria->categoria = $data['categoria'];
        $categoria->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('portefolios.index'))->with('status', 'Categoria criada com sucesso!');
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
        $categoria = Categoria::findOrFail($id);
        return view ('adm.categorias.edit',compact('categoria'));
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
            'categoria' => 'required|max:255',
        ]);
        //Gravar na BD
        Categoria::where('id',$id)->update([
            'categoria' => $data['categoria'],
        ]);

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('portefolios.index'))->with('status', 'Categoria alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        if (count($categoria->portefolios)==0) {
            Categoria::where('id',$id)->delete();
            return redirect(route('portefolios.index'))->with('status', 'Categoria eliminada com sucesso!');
        }else{
            return redirect(route('portefolios.index'))->with('status', 'Categoria com items de portefólio. Eliminação não é possível!');
        }


    }
}
