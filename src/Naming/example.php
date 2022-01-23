<?php
/*
    Valorar diferentes alternativas
    Descriptivos
    Mismo idioma
    Nombres de clases: entidades
    Nombres de métodos: acciones
    PSR-2
 */

// ## Variables ##

// Malas practicas
//Evitar tipos de datos
$arrayUsuarios = array("Manuel", "Maria", "Marta");
$stringTitulo = "El principito";

//Evitar números mágicos
$valor1 = "casa";

// Evitar letras
$a = 15;

/*
    Buenas practicas:
    Nombrando a las Variables: camelCase
    booleans: añadir el prefijo "is" al nombre de variable
    Constantes:utilizar mayúsculas y guion bajo
*/
$usuariosRegistrados = [];
$isMember = true;
$PRECIO_BASE = 15;

 // ## Funciones ##
 /*
    Nombrando a los Métodos: camelCase
    Verb(Do What?) + Noun(To What?)  = Result
    Ej:
    load + CustomerDetails = loadCustomerDetails();
    set + Price = setPrice()
 */

class ejemplo {
    public function loadCustomerDetails() {
       //
    }

    public function setPrice() {
        //
    }
}





// ## Classes ##
/*
    Siempre PascalCase: Ej: User, Estudiante, UserRepository
    Nombrando a los Controllers: singular, sin espacios y PascalCase
*/

class UserController
{
    public function getAllPosts($allPosts)
    {

    }
}
