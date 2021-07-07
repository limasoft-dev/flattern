<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class FirmaController extends Controller
{
    public function contactos(){
        $dados = Config::findOrFail(1);
        return view ('adm.contactos',compact('dados'));
    }

    public function socials(){
        $dados = Config::findOrFail(1);
        return view ('adm.socials',compact('dados'));
    }
    public function chamadah(){
        $dados = Config::findOrFail(1);
        return view ('adm.chamadah',compact('dados'));
    }

    public function entidadeupdate(Request $request, $id){
        $request->validate([
            'shortname' => 'required|max:20',
            'longname' => 'nullable|string|max:255',
            'mypath' => 'required|url|max:255'
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'shortname' => $data['shortname'],
                'longname' => $data['longname'],
                'mypath' => $data['mypath'],
            ]);
        return redirect(route('firma.contactos'))->with('success','Dados guardados com sucesso');
    }

    public function moradaupdate(Request $request, $id){
        $request->validate([
            'morada' => 'required|max:255',
            'cpostal' => 'required|string|max:255',
            'localidade' => 'required|string|max:255'
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'morada' => $data['morada'],
                'cpostal' => $data['cpostal'],
                'localidade' => $data['localidade'],
            ]);
        return redirect(route('firma.contactos'))->with('success','Dados guardados com sucesso');
    }

    public function emailphoneupdate(Request $request, $id){
        $request->validate([
            'email' => 'required|email|max:255',
            'emailsec' => 'required|email|max:255',
            'telefone' => 'required|string|max:255',
            'telefonesec' => 'required|string|max:255'
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'email' => $data['email'],
                'emailsec' => $data['emailsec'],
                'telefone' => $data['telefone'],
                'telefonesec' => $data['telefonesec'],
            ]);
        return redirect(route('firma.contactos'))->with('success','Dados guardados com sucesso');
    }

    public function socialsupdate(Request $request, $id){
        $request->validate([
            'twitter' => 'max:255',
            'facebook' => 'max:255',
            'instagran' => 'max:255',
            'skype' => 'max:255',
            'linkedin' => 'max:255',
            'smugmug' => 'max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'twitter' => $data['twitter'],
                'facebook' => $data['facebook'],
                'instagran' => $data['instagran'],
                'skype' => $data['skype'],
                'linkedin' => $data['linkedin'],
                'smugmug' => $data['smugmug'],
            ]);
        return redirect(route('firma.socials'))->with('success','Dados guardados com sucesso');
    }

    public function chamadahupdate(Request $request, $id){
        $request->validate([
            'chtitp1' => 'nullable|max:255',
            'chtitp2' => 'nullable|max:255',
            'chtitp3' => 'nullable|max:255',
            'chtexto' => 'nullable|max:255',
            'chtxtlink' => 'nullable|max:255',
            'chlink' => 'nullable|url|max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'chtitp1' => $data['chtitp1'],
                'chtitp2' => $data['chtitp2'],
                'chtitp3' => $data['chtitp3'],
                'chtexto' => $data['chtexto'],
                'chtxtlink' => $data['chtxtlink'],
                'chlink' => $data['chlink'],
            ]);
        return redirect(route('firma.chamadah'))->with('success','Dados guardados com sucesso');
    }

    public function servicosupdate(Request $request, $id){
        $request->validate([
            'servtitp1' => 'nullable|max:255',
            'servtitp2' => 'nullable|max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'servtitp1' => $data['servtitp1'],
                'servtitp2' => $data['servtitp2'],
            ]);
        return redirect(route('servicos.index'))->with('success','Titulo guardado com sucesso');
    }

    public function portefolioupdate(Request $request, $id){
        $request->validate([
            'pttitp1' => 'nullable|max:255',
            'pttitp2' => 'nullable|max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'pttitp1' => $data['pttitp1'],
                'pttitp2' => $data['pttitp2'],
            ]);
        return redirect(route('portefolios.index'))->with('success','Titulo guardado com sucesso');
    }

    public function clientesupdate(Request $request, $id){
        $request->validate([
            'cltitp1' => 'nullable|max:255',
            'cltitp2' => 'nullable|max:255',
            'cltexto' => 'nullable|max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'cltitp1' => $data['cltitp1'],
                'cltitp2' => $data['cltitp2'],
                'cltexto' => $data['cltexto'],
            ]);
        return redirect(route('clientes.index'))->with('success','Cliente guardado com sucesso');
    }

    public function teamsupdate(Request $request, $id){
        $request->validate([
            'teamtitp1' => 'nullable|max:255',
            'teamtitp2' => 'nullable|max:255',
            'teamtexto' => 'nullable|max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'teamtitp1' => $data['teamtitp1'],
                'teamtitp2' => $data['teamtitp2'],
                'teamtexto' => $data['teamtexto'],
            ]);
        return redirect(route('teams.index'))->with('success','Equipa guardada com sucesso');
    }

    public function testemunhosupdate(Request $request, $id){
        $request->validate([
            'testemunhotitp1' => 'nullable|max:255',
            'testemunhotitp2' => 'nullable|max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'testemunhotitp1' => $data['testemunhotitp1'],
                'testemunhotitp2' => $data['testemunhotitp2'],
            ]);
        return redirect(route('testemunhos.index'))->with('success','Testemunho guardado com sucesso');
    }
}
