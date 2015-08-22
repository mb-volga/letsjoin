<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhotosGallary
 *
 * @author Ислам
 */
class PhotosGallary extends ActiveRecord
{
    protected static $_table = 'photos_gallary';
    
    public function safe() 
    {
        return array( 'id', 'id_gallary', 'path_photo' );
    }
    
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
