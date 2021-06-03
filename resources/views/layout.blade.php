<!DOCTYPE html>
<html lang="es">
<head>
    <title>SISTEMA DE ALERTAS</title>
    <meta charset="utf-8" />
    <meta name="description" content="Debe contener las palabras clave, tratar de atraer clicks y de longitud entre 150 y 160 caracteres">
    <style>
        .actual{
            color: #1a202c;
            font-weight: bold;
        }
    </style>
</head>

<body>
<nav>
    <a href="/ingreso-usuario" class="actual">Nuevo usuario</a>
    <a href="/mostrar-usuario" class="actual">Mostrar Usuario</a>
</nav>
<header>
    <h1>ALERTAS AL INSTANTE</h1>
</header>
<section>
    @yield("contenido")
</section>
</body>
</html>
