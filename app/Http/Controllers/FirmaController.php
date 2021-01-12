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
}
