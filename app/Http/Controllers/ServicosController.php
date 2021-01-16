<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getservicos(){
        return Servico::all();
    }

    public function index()
    {
        $servicos = Servico::orderBy('ordem')->get();
        $dados = Config::findOrFail(1);
        return view ('adm.servicos.index',compact('servicos','dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adm.servicos.create');
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
            'link' => 'nullable|url|max:255',
            'ordem' => 'required',
            'icon' => 'required|max:255',
        ]);
        //Gravar na BD
        $servicos = new Servico();
        $servicos->titulo = $data['titulo'];
        $servicos->texto = $data['texto'];
        $servicos->link = $data['link'];
        $servicos->ordem = $data['ordem'];
        $servicos->icon = $data['icon'];
        $servicos->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('servicos.index'))->with('status', 'Serviço criado com sucesso!');
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
        $servico = Servico::findOrFail($id);
        return view ('adm.servicos.edit',compact('servico'));
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
            'link' => 'nullable|url|max:255',
            'ordem' => 'required',
            'icon' => 'required|max:255',
        ]);
        //Gravar na BD
        Servico::where('id',$id)->update([
            'titulo' => $data['titulo'],
            'texto' => $data['texto'],
            'link' => $data['link'],
            'ordem' => $data['ordem'],
            'icon' => $data['icon'],
        ]);

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('servicos.index'))->with('status', 'Serviço alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servico::where('id',$id)->delete();
        return redirect(route('servicos.index'))->with('status', 'Serviço eliminado com sucesso!');
    }
}
