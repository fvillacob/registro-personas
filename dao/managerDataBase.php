<?php
namespace dao;


// declaramos variables
use Exception;


class managerDataBase
{
    
    private $conection;    
    
    
    public function open(){
        try{
            
              $DATABASE_HOST  = 'localhost';
              $DATABASE_USER  = 'root';
              $DATABASE_PASS  = '';
              $DATABASE_NAME  = 'test';
              
              global $conection;              
                     $conection = mysqli_connect( $DATABASE_HOST, $DATABASE_USER , $DATABASE_PASS, $DATABASE_NAME ); 
              
        }catch( Exception $ex ){
              $conection = null;
        }
    }
    
    
    
    
    public function close(){       
        global $conection;
               $conection = null;
    }
    
    
    
    public function executeSQL( String $sql ){
        $result  = null;
        try{
            
            global $conection;
            if( $conection != null ){                 
                $result = mysqli_query( $conection , $sql ); 
            }
            
        }catch( Exception $ex ){
            $result = null;
        }
        return $result;
    }
    
    
    
    
    public function executeIUD( String $sql ){
        $result    = false;
        try{
            
            global $conection;
            if( $conection != null ){                   
                $result =  mysqli_query( $conection , $sql );
            }
            
        }catch( Exception $ex ){
            $result = false;
        }
        return $result;
    }
    
    
    
    
    
    
}

