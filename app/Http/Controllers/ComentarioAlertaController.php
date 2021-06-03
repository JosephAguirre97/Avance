<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

use App\Models\ComentarioAlerta;
use Illuminate\Http\Request;

class ComentarioAlertaController extends Controller
{
    public function guardar(Request $request){
        $request->validate(
            [   'usuario'=>'required',
                'texto'=>'required',

            ]
        );
        $usuario= new ComentarioAlerta();
        $usuario->usuario = $request->usuario;
        $usuario->texto = $request->texto;
        $usuario->fecha= $request->fecha;
        $usuario->save();
        return redirect("/mostrar-alerta");
    }
    public function mostrar()
    {
        $resultados =ComentarioAlerta::all();
        return view("mostrarAlerta",["resultados"=>$resultados]);
    }
    public  function mostrarAler(int $id){
        $resultados= ComentarioAlerta::where("id",$id)->first();
        return view("actualizarAlerta",["data"=>$resultados]);

    }
    public function actualizar(Request $request){
        $request->validate(
            [   'usuario'=>'required | alpha',
                'texto'=>'required | alpha',

            ]
        );
        $usuario = ComentarioAlerta::find($request->id);
        $usuario->usuario = $request->usuario;
        $usuario->texto = $request->texto;
        $usuario->fecha= $request->fecha;
        $usuario->save();
        return redirect("/mostrar-alerta");
    }
    public function eliminar(ComentarioAlerta $id){
        $id->delete();
        return back()->with("succes","usuario eliminado correctamente");

    }
}
