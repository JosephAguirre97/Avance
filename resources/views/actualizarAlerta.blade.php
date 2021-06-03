@extends("layouts.app")
@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <th>Usuario</th>
            <th>Texto</th>
            <th>Fecha</th>

        </tr>
        <form method="post" action="/actualizar-alerta">
            @csrf
            <tr>

                <th><input type="text" size="20" name="usuario" @error('usuario') style="border: 1px solid red" @enderror value="{{$data["usuario"]}}"></th>
                <th><input type="text" size="20" name="texto" @error('apellido') style="border: 1px solid red" @enderror value="{{$data["texto"]}}"></th>
                <th><input type="date" size="30" name="fecha" @error('email') style="border: 1px solid red" @enderror value="{{$data["fecha"]}}"></th>

            </tr>
            <th>
                @error('usuario')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('texto')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('fecha')
                <br><span style="color: red">{{$message}}</span>
                @enderror
            </th>

            <tr>
                <td colspan="8">
                    <input type="submit" class="btn btn-primary mt-2" name="submit" value="Actualizar">
                </td>

            </tr>

        </form>
    </table>
    </div>
@endsection
