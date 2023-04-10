<?php 

# Importamos librerias y clases
require "../util/Constantes.php";

# Declaramos variables
use util\Constantes;

?>

<html>
    <head>
        <script src="../include/js/eventos.js"     language="javascript" ></script>
        <link   href="../include/css/estilos.css"  rel="stylesheet" type="text/css" />
    </head>   
    <body>
    
           <table cellpadding='0' cellspacing='0' align='center' border="0" class="global_tabla_header" >
              <tr height="20pk"><td></td></tr>
              <tr><td align='center' class='global_title'   > REGISTRAR </td></tr>
              <tr height="20pk"><td></td></tr>
           </table>
           
           <form action="process_registro.php" method="POST">
           
                   <BR>
                   <table cellpadding='0' cellspacing='0'  align='center' border="0"  class="global_tabla_size" >
                        <tr height="30px" valign='middle'><td class='global_formulario'>Codigo   </td></tr>
                        <tr><td><input type="text"   name="codigo"   class='global_formulario_input' placeholder="Digite su Identificación" ></td></tr>
                        <tr height="10px"><td></td></tr>
                        
                        <tr height="30px" valign='middle'><td class='global_formulario'>Nombre   </td></tr>
                        <tr><td><input type="text"   name="nombre"   class='global_formulario_input' placeholder="Digite su Nombre" ></td></tr>
                        <tr height="10px"><td></td></tr>
                        
                        <tr height="30px" valign='middle'><td class='global_formulario'>Email    </td></tr> 
                        <tr><td><input type="text"   name="email"    class='global_formulario_input' placeholder="Digite su Emaíl" ></td></tr>
                        <tr height="10px"><td></td></tr>
                        
                        <tr height="30px" valign='middle'><td class='global_formulario'>Telefono </td></tr>
                        <tr><td><input type="text"   name="telefono" class='global_formulario_input' placeholder="Digite su Teléfono" ></td></tr>
                   </table>
                   
                   
                   <br><br><br>
                   <table cellpadding='0' cellspacing='0' align='center' border="0" class='global_tabla_btn_size' >
                      <tr valign='middle'><td align='center' class='bton_1' > <input type="submit" value='Aceptar' class='bton_1'>  </td></tr><tr height="20pk"><td></td></tr>          
                      <tr valign='middle'><td align='center' class='bton_3' onclick="redirect('INTRO');" >Cancelar  </td></tr>
                   </table>
                   <br>
           
              </form>
           
    </body>
</html>
