<?php
  require( 'HarDevLib.php' );
  require( 'VistaIndex.php' );
  if(isset($_POST['btnEnviar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    // echo "<h3>hola $nombre $apellido veo que tienes $edad años</h3>";
    echo mostrarSweetAlert('success', 'Felicidades BROKY!', 'Los Datos han sido Enviados Correctamente', 3000);
  }
?>
