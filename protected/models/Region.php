<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Region
 *
 * @author Ислам
 * @property $id
 * @property $title Регион
 * @property $titleLabel
 */
class Region extends ActiveRecord
{
    protected static $_table = 'region';
    
    
    public function safe()
    {
        return array( 'id', 'title', 'idCity' );
    }
    
    public function relations() 
    {
        return array(
            'idCity'=>array(self::HAS_MANY, 'city', 'id_region')
        );
    }

    



    public function attributeLabels()
    {
        return array( 
            'id'=>'ID',
            'title'=>'Регион'
        );
    }    
    
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
