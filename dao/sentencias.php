<?php
namespace dao;

class Sentencias
{
    
    static public $LISTAR_PERSONAS   = "SELECT * FROM persona ORDER By id";
    static public $INSERT_PERSONA    = "INSERT INTO persona(codigo, nombre, email, telefono, fecha ) VALUES ('#CODE#','#NAME#','#EMAIL#','#PHONE#', now() )";
    
    
}

