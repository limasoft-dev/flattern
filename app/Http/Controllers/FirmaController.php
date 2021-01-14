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
        return redirect(route('sad.firma.contactos'))->with('success','Dados guardados com sucesso');
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
        return redirect(route('sad.firma.contactos'))->with('success','Dados guardados com sucesso');
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
        return redirect(route('sad.firma.contactos'))->with('success','Dados guardados com sucesso');
    }

    public function socialsupdate(Request $request, $id){
        $request->validate([
            'twitter' => 'max:255',
            'facebook' => 'max:255',
            'instagran' => 'max:255',
            'skype' => 'max:255',
            'linkedin' => 'max:255',
        ]);
        $data = $request->all();
        Config::where(['id'=>$id])->update([
                'twitter' => $data['twitter'],
                'facebook' => $data['facebook'],
                'instagran' => $data['instagran'],
                'skype' => $data['skype'],
                'linkedin' => $data['linkedin'],
            ]);
        return redirect(route('sad.firma.socials'))->with('success','Dados guardados com sucesso');
    }
}