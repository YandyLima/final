<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Hello {{ $first_name }}, thanks for signing up <strong>to Request Manager</strong> !</h2>

<h2>your password is: {{ $password }}</h2>
<h4>Log in <a href="{{ asset(route('login')) }}" >here</a></h4>

</body>
</html>
