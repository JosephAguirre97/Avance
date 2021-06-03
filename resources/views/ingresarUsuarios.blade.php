@extends("layouts.app")
@section("content")
    <div class="container">
    <h1>INGRESAR USUARIO</h1>
    <form method="post" action="/ingresar-usuario" >
        @csrf
        <th><input type="text" maxlength="100" class="form-control" name="nombre" @error('nombre') style="border: 1px solid red" @enderror placeholder="Nombre"></th>
        @error('nombre')
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <br>
        <th><input type="text" maxlength="200" class="form-control"  name="apellido" @error('apellido') style="border: 1px solid red" @enderror placeholder="Apellidos"></th>
        @error('apellido')
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <br>
        <th><input type="text" maxlength="30" class="form-control"  name="correo" @error('correo') style="border: 1px solid red" @enderror placeholder="Email"></th>
        @error('correo')
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <br>
        <th><input type="number" maxlength="9" class="form-control"  name="telefono" @error('telefono') style="border: 1px solid red" @enderror placeholder="Telefono/celular"></th>
        @error('telefono')
        <br><span style="color: red">{{$message}}</span>
        @enderror

        <td colspan="5"><input type="submit" class="btn btn-primary mt-2" name="submit" value="Guardar"></td>

    </form>
    </div>
@endsection
