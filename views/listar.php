<?php

    # Importamos librerias y clases
    include  "../delegate/Delegate.php";

    # Declaramos variables
    use delegate\Delegate;
    
    # Buscamos los registros
    $delegate  = new Delegate();
    $result    = $delegate->listar_all_personas();
    
?>



<html>
    <head>
        <script src="../include/js/eventos.js"     language="javascript" ></script>
        <link   href="../include/css/estilos.css"  rel="stylesheet" type="text/css" />
    </head>   
    <body>
    
           <table cellpadding='0' cellspacing='0' align='center' border="0" class="global_tabla_header" >
              <tr height="20pk"><td></td></tr>
              <tr><td align='center' class='global_title'   > LISTA DE PERSONAS </td></tr>
              <tr height="20pk"><td></td></tr>
           </table>
           
           <BR>
           
           <?php if( $result != null ) { ?> 
                     
                    <table cellpadding='0' cellspacing='0'  align='center' border="0"  class="global_tabla_size" >
                        <tr height="30PX" valign='middle'>
                            <td align='center' width="25%" class='global_list_title'>CODIGO   </td>
                            <td align='center' width="25%" class='global_list_title'>NOMBRE   </td>
                            <td align='center' width="25%" class='global_list_title'>EMAIL    </td> 
                            <td align='center' width="25%" class='global_list_title'>TELEFONO </td>       
                        </tr>
                        <?php foreach ( $result as $registro ) {?>             
                              <tr>
                                  <td class='global_label'> <?php echo $registro['codigo'];  ?> </td>
                                  <td class='global_label'> <?php echo $registro['nombre'];  ?> </td>
                                  <td class='global_label'> <?php echo $registro['email'];   ?> </td> 
                                  <td class='global_label'> <?php echo $registro['telefono'];?> </td>       
                              </tr>
                        <?php }?>
                    </table>
                    <br>
                
            <?php }else{ ?>
            
                    <br><br>
                    <table cellpadding='0' cellspacing='0'  align='center' border="0"  class="global_tabla_size" >
                      <tr><td align='center' class='global_texto'>No hay registros</td></tr>
                    </table>                
                    <br><br>
                    <table cellpadding='0' cellspacing='0' align='center' border="0" class='global_tabla_btn_size' >
                      <tr valign='middle'><td align='center' class='bton_1' onclick="redirect('REG');"  >Registrar </td></tr>          
                    </table>
                
            <?php }?>
            
            
            <br>
            <table cellpadding='0' cellspacing='0' align='center' border="0" class='global_tabla_btn_size' >
              <tr valign='middle'><td align='center' class='bton_3' onclick="redirect('INTRO');"  >Regresar </td></tr>          
            </table>
            <br>
    
    
    </body>
</html>
