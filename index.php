<?php

# Importamos librerias y clases
require "util/Constantes.php";

# Declaramos variables
use util\Constantes;

?>

<html>
    <head>
        <script src="include/js/eventos.js"     language="javascript" ></script>
        <link   href="include/css/estilos.css"  rel="stylesheet" type="text/css" />
    </head>   
    <body>
    
          <table cellpadding='0' cellspacing='0' align='center' border="0" class="global_tabla_header" >
              <tr height="20pk"><td></td></tr>
              <tr><td align='center' class='home_saludo'   ><?php echo Constantes::$HOME_SALUDO; ?></td></tr>
              <tr height="10pk"><td></td></tr>
              <tr><td align='center' class='home_wellcome' ><?php echo str_replace( '#SITENAME#',  Constantes::$SITE_NAME , Constantes::$HOME_WELLCOME ); ?></td></tr>
              <tr height="20pk"><td></td></tr>
           </table>
           
           <br><br><br>
           <table cellpadding='0' cellspacing='0'  align='center' border="0"  class="global_tabla_size" >
             <tr><td align='center' class='global_texto'><?php echo Constantes::$HOME_TEXTO; ?></td></tr>
           </table>      
           
    
           <br><br><br>
           <table cellpadding='0' cellspacing='0' align='center' border="0" class='global_tabla_btn_size' >
              <tr valign='middle'><td align='center' class='bton_1' onclick="redirect('REG');"  >Registrar </td></tr><tr height="20pk"><td></td></tr>          
              <tr valign='middle'><td align='center' class='bton_2' onclick="redirect('LIST');" >Listar    </td></tr>
           </table>
           <br>
    
     </body>
</html> 
  