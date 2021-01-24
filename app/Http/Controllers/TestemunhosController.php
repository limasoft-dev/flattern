<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Testemunho;
use Illuminate\Http\Request;

class TestemunhosController extends Controller
{
    public function gettestemunhos(){
        return Testemunho::all();
    }

    public function index()
    {
        $testemunhos = Testemunho::orderBy('ordem')->get();
        $dados = Config::findOrFail(1);
        return view ('adm.testemunhos.index',compact('testemunhos','dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adm.testemunhos.create');
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
            'nome' => 'required|max:255',
            'funcao' => 'required|max:255',
            'imagem' => 'required|image|mimes:jpg,jpeg,png',
            'testemunho' => 'required|max:255',
            'ordem' => 'required|gt:0'
        ]);
        //Gravar na BD
        $testemunho = new Testemunho();
        $testemunho->nome = $data['nome'];
        $testemunho->funcao = $data['funcao'];
        $testemunho->testemunho = $data['testemunho'];
        $testemunho->ordem = $data['ordem'];
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/testemunhos/';
            $img->move($path,$imgnome);
            $testemunho->imagem = $imgnome;
        }
        $testemunho->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('testemunhos.index'))->with('status', 'Testemunho criado com sucesso!');
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
        $testemunho = Testemunho::findOrFail($id);
        return view ('adm.testemunhos.edit',compact('testemunho'));
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
            'nome' => 'required|max:255',
            'funcao' => 'required|max:255',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png',
            'testemunho' => 'required|max:255',
            'ordem' => 'required|gt:0'
        ]);
        //Gravar na BD
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/testemunhos/';
            $img->move($path,$imgnome);
            Testemunho::where('id',$id)->update([
                'nome' => $data['nome'],
                'funcao' => $data['funcao'],
                'testemunho' => $data['testemunho'],
                'ordem' => $data['ordem'],
                'imagem' => $imgnome
            ]);
        } else {
            Testemunho::where('id',$id)->update([
                'nome' => $data['nome'],
                'funcao' => $data['funcao'],
                'testemunho' => $data['testemunho'],
                'ordem' => $data['ordem'],
            ]);
        }

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('testemunhos.index'))->with('status', 'Testemunho editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testemunho::where('id',$id)->delete();
        return redirect(route('testemunhos.index'))->with('status', 'Testemunho eliminado com sucesso!');
    }
}
