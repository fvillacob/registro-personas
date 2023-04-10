<?php
# Importamos librerias y clases
require "../delegate/Delegate.php";
require "../util/Constantes.php";

# Declaramos variables
use delegate\Delegate;

#obtenemos los parametros
$codigo     =  $_POST['codigo']; 
$nombre     =  $_POST['nombre']; 
$email      =  $_POST['email'];
$telefono   =  $_POST['telefono'];


#Registramos
$delegate = new Delegate();
$result   = $delegate->add_persona( $codigo, $nombre, $email, $telefono  );

if( $result == true ){
    header("Location: listar.php" );
    exit;
}else{    
    header("Location: registrar.php" );
    exit;
}

?>