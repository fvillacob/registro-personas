<?php
namespace delegate;

// importamos librerias y clases
require "../dao/managerDataBase.php";
require "../dao/sentencias.php";

// declaramos variables
use dao\managerDataBase;
use dao\sentencias;
use Exception;


class Delegate
{
    
    
    
    # permite listar todas las personas
    public function listar_all_personas(){
        $dao   = null;
        $datos = null;
        try{
            
            $dao   = new managerDataBase();
            $dao->open();
            $datos = $dao->executeSQL( Sentencias::$LISTAR_PERSONAS );
            
        }catch( Exception $ex ){
            $datos = null;
        }finally{
            $dao->close();
            $dao   = null;
        }        
        return $datos;
    }
    
    
    
    # permite registrar una persona
    public function add_persona( $codigo, $nombre, $email, $telefono ){
        $dao   = null;
        $query = null;
        $datos = false;
        try{
            
            $dao = new managerDataBase();
            $dao->open();
            $query = str_replace( ['#CODE#' ,'#NAME#' , '#EMAIL#' , '#PHONE#' ],
                                  [ $codigo , $nombre ,  $email   , $telefono ],
                                  Sentencias::$INSERT_PERSONA
                                );
            $datos = $dao->executeIUD( $query );
            
        }catch( Exception $ex ){
            $datos = false;
        }finally{
            $dao->close();
            $dao   = null;
            $query = null;
        }  
        return $datos;
    }
    
    
    
}

