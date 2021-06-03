<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $request){
        $request->validate(
            [   'nombre'=>'required',
                'apellido'=>'required',
                'correo'=>'required',
                'telefono'=>'required',

            ]
        );
        $usuario= new Usuario();
        $usuario->Nombre = $request->nombre;
        $usuario->Apellidos = $request->apellido;
        $usuario->Correo= $request->correo;
        $usuario->Telefono = $request->telefono;
        $usuario->save();
        return redirect("/mostrar-usuario");
    }
    public function mostrar()
    {
        $resultados =Usuario::all();
        return view("mostrarUsuario",["resultados"=>$resultados]);
    }
    public  function mostrarUsuario(int $id){
        $resultados= Usuario::where("id",$id)->first();
        return view("actualizarUsuario",["data"=>$resultados]);

    }
    public function actualizar(Request $request){
        $request->validate(
            [   'nombre'=>'required',
                'apellido'=>'required',
                'email'=>'required',
                'telefono'=>'required'
            ]
        );
        $usuario = Usuario::find($request->id);
        $usuario->Nombre = $request->nombre;
        $usuario->Apellidos = $request->apellido;
        $usuario->Correo= $request->correo;
        $usuario->Telefono = $request->telefono;
        $usuario->save();
        return redirect("/mostrar-usuario");
    }
    public function eliminar(Usuario $id){
        $id->delete();
        return back()->with("succes","usuario eliminado correctamente");

    }

}
