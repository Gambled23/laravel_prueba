<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <form action="contacto" method="POST">
        @CSRF
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <textarea name="mensaje" placeholder="Mensaje"></textarea><br>
        <input type="submit" value="Enviar"><br>
    </form>
    
    @if($prueba > 2)
        <b>Prueba es mayor a 2</b>
    @elseif($prueba < 2)
        <b>Prueba es menor a 2</b>
    @else
        <b>Prueba es 2</b>
    @endif
</body>
</html>