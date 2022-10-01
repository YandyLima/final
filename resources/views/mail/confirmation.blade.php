<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Hola {{ $first_name }}, gracias por registrarte en <strong>al Gestor de Solicitudes</strong> !</h2>

<h2>Tu contraseña es: {{ $password }}</h2>
<h4>Inicia sesión <a href="{{ asset(route('login')) }}" >aquí</a></h4>

</body>
</html>
