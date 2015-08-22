<?php
/**
 * Функция __autoload ищет и подгружает запрашиваемые классы.
 */
function __autoload($class)
{
    $exten   = '.php';
    
    /** Классы из core **/
    $components   = __DIR__ . '/'                . $class . $exten;
    $Controller   = __DIR__ . '/../controllers/' . $class . $exten;
    $Model        = __DIR__ . '/../models/'      . $class . $exten;
    $View         = __DIR__ . '/../views/'       . $class . $exten;
    $Exception    = __DIR__ . '/../exceptions/'  . $class . $exten;
    $Validators   = __DIR__ . '/../validators/'  . $class . $exten; 
    
    
    /** Классы core пользовательские **/    
    $controllers   = __DIR__ . '/../../protected/controllers/' . $class . $exten;
    $models        = __DIR__ . '/../../protected/models/'      . $class . $exten;   
    $components_protected = __DIR__ . '/../../protected/components/'      . $class . $exten;   
    
    $admin         = __DIR__ . '/../../administration/controllers/' . $class . $exten;
    
    $helpers       = __DIR__ . '/../helpers/' . $class . $exten;
    
    if( file_exists($components)){
        require_once $components;
    } elseif( file_exists($Controller) ){
        require_once $Controller;
    } elseif( file_exists($Model) ){
        require_once $Model;
    } elseif( file_exists($View) ){
        require_once $View;
    } elseif( file_exists($Exception) ){
        require_once $Exception;
    } elseif (file_exists($Validators)) {
        require_once $Validators;
    } 

    elseif( file_exists($controllers) ){
        require_once $controllers;
    }  elseif( file_exists($models) ){
        require_once $models;
    }  elseif( file_exists($components_protected) ){
        require_once $components_protected;
    }  elseif( file_exists($helpers) ){
        require_once $helpers;
    }  elseif (file_exists($admin)) {
        require_once $admin;
    }
}
