@extends("layouts.app")
@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <th>Usuario</th>
            <th>Texto</th>
            <th>fecha</th>


        </tr>
        <tr>
            @foreach($resultados as $alerta)
                <td>{{$alerta["usuario"]}}</td>
                <td>{{$alerta["texto"]}}</td>
                <td>{{$alerta["fecha"]}}</td>
                <td><a href="/actualizar-alerta/{{$alerta["id"]}}">Actualizar</a></td>
                <form action="{{route("eliminar",$alerta->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <td>
                        <input type="submit" name="eliminar" value="Eliminar">
                    </td>
                </form>

        </tr>
        @endforeach


    </table>
    </div>
@endsection
