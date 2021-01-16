<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Config;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getclientes(){
        return Cliente::all();
    }

    public function index()
    {
        $clientes = Cliente::orderBy('cliente')->get();
        $dados = Config::findOrFail(1);
        return view ('adm.clientes.index',compact('clientes','dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adm.clientes.create');
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
            'cliente' => 'required|max:255',
            'imagem' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
        $cliente = new Cliente;
        $cliente->cliente = $data['cliente'];
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/clientes/';
            $img->move($path,$imgnome);
            $cliente->imagem = $imgnome;
        }
        $cliente->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('clientes.index'))->with('status', 'Cliente criado com sucesso!');
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
        $cliente = Cliente::findOrFail($id);
        return view ('adm.clientes.edit',compact('cliente'));
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
            'cliente' => 'required|max:255',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        //Gravar na BD
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/clientes/';
            $img->move($path,$imgnome);
            Cliente::where('id',$id)->update([
                'cliente' => $data['cliente'],
                'imagem' => $imgnome
            ]);
        } else {
            Cliente::where('id',$id)->update([
                'cliente' => $data['cliente'],
            ]);
        }

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('clientes.index'))->with('status', 'Cliente editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::where('id',$id)->delete();
        return redirect(route('clientes.index'))->with('status', 'Cliente eliminado com sucesso!');
    }
}
