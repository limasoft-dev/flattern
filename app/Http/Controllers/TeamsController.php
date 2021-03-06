<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function getteams(){
        return Team::all();
    }

    public function index()
    {
        $teams = Team::orderBy('nome')->get();
        $dados = Config::findOrFail(1);
        return view ('adm.equipa.index',compact('teams','dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adm.equipa.create');
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
            'twitter' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'instagram' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
        ]);
        //Gravar na BD
        $team = new Team();
        $team->nome = $data['nome'];
        $team->funcao = $data['funcao'];
        $team->twitter = $data['twitter'];
        $team->facebook = $data['facebook'];
        $team->instagram = $data['instagram'];
        $team->linkedin = $data['linkedin'];
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/teams/';
            $img->move($path,$imgnome);
            $team->imagem = $imgnome;
        }
        $team->save();
        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('teams.index'))->with('status', 'Membro criado com sucesso!');
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
        $team = Team::findOrFail($id);
        return view ('adm.equipa.edit',compact('team'));
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
            'twitter' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'instagram' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
        ]);
        //Gravar na BD
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimages/teams/';
            $img->move($path,$imgnome);
            Team::where('id',$id)->update([
                'nome' => $data['nome'],
                'funcao' => $data['funcao'],
                'twitter' => $data['twitter'],
                'facebook' => $data['facebook'],
                'instagram' => $data['instagram'],
                'linkedin' => $data['linkedin'],
                'imagem' => $imgnome
            ]);
        } else {
            Team::where('id',$id)->update([
                'nome' => $data['nome'],
                'funcao' => $data['funcao'],
                'twitter' => $data['twitter'],
                'facebook' => $data['facebook'],
                'instagram' => $data['instagram'],
                'linkedin' => $data['linkedin'],
            ]);
        }

        //Redirecionar para o form das categorias com mensagem de feedback
        return redirect(route('teams.index'))->with('status', 'Membro editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::where('id',$id)->delete();
        return redirect(route('teams.index'))->with('status', 'Membro eliminado com sucesso!');
    }
}
