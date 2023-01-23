<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <title>Practicas PHP</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="mobile.css?v=4">
  <link rel="stylesheet" href="desktop.css?v=4">
  <script src="sweetalert2.all.min.js"></script>
</head>
<body>
  <h1 class="tituloPrincipal">Prácticas PHP</h1>
  <div class="container">
    <form action="index.php" method="POST" id="formulario">
        <p class="tituloForm">Ingreso de Datos</p>
        <label for="nombre">Nombre:</label>
        <input type="text" name='nombre' class="cajasTexto" id='nombre' required>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" class='cajasTexto' id='apellido' required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" class='cajasTexto' id='edad' required>
        <input type="submit" value="Enviar" name='btnEnviar' class='btnEnviar' id='btnEnviar')>
    </form>  
  </div>
</body>
</html>