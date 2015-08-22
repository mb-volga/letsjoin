<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CleanValidate
 *
 * @author Ислам
 */
class CleanValidate extends Validate
{
    public function clean( $data ) 
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    public static function validate()
    {
        return new CleanValidate();
    }
}
