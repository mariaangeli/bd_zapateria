<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Zapatería La Sangileña</title>
    

</head>
<body>
    <h1>Zapatería La Sangileña</h1>
    <div id="div-inicio-sesion">
        <form action="modelo/loguear.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
            <br>
            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
