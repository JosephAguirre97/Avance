@extends("layouts.app")
@section("content")
    <div class="container">
    <h1>ALERTA</h1>
    <form method="post" action="/ingresar-alerta" >
        @csrf
        <th><input type="text" maxlength="300" class="form-control" name="usuario" @error('nombre') style="border: 1px solid red" @enderror placeholder="Nombre del Usuario"></th>
        @error('usuario')
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <br>
        <th><input type="text" maxlength="200" class="form-control" name="texto" @error('texto') style="border: 1px solid red" @enderror placeholder="Comentario de Alerta"></th>
        @error('texto')
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <br>
        <th><input type="text" class="form-control" name="fecha" @error('fecha') style="border: 1px solid red" @enderror placeholder="Fecha"></th>
        @error('fecha')
        <br><span style="color: red">{{$message}}</span>
        @enderror
        <td colspan="5"><input type="submit" class="btn btn-primary mt-2" name="submit" value="Guardar"></td>

    </form>
    </div>
@endsection
