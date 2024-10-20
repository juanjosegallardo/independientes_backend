<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Nombre: {{ $evaluacion["nombre"] }}</h1>
    <h2>Club: {{ $evaluacion["club"] }}</h2>
    <h2>Marca: {{ $evaluacion["marca"] }}</h2>
    <h2>Año: {{ $evaluacion["anio"] }}</h2>
    <h2>Puntuación final: {{ $evaluacion["puntuacion_final"] }}</h2>

    <table>

    @foreach($evaluacion["atributos"] as $atributo)
        <tr>
            <td> {{$atributo["nombre"]}}</td>
            <td>  {{$atributo["pivot"]["calificacion"]}}</td>
        </tr>

    @endforeach

    </table>
</body>
</html>