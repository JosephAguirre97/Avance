@extends("layouts.app")
@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>

        </tr>
        <form method="post" action="/actualizar-usuario">
            @csrf
            <tr>

                <th><input type="text" size="10" name="nombre" @error('nombre') style="border: 1px solid red" @enderror value="{{$data["Nombre"]}}"></th>
                <th><input type="text" size="10" name="apellido" @error('apellido') style="border: 1px solid red" @enderror value="{{$data["Apellidos"]}}"></th>
                <th><input type="text" size="30" name="email" @error('email') style="border: 1px solid red" @enderror value="{{$data["Email"]}}"></th>
                <th><input type="text" size="10" name="telefono" @error('telefono') style="border: 1px solid red" @enderror value="{{$data["Telefono"]}}"></th>

            </tr>
            <th>
                @error('nombre')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('apellido')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('email')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('telefono')
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
