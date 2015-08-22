<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Places
 *
 * @author Ислам
 */
class Places extends ActiveRecord
{
    protected static $_table = 'places';
    
    public function safe()
    {
        return array(
            'id', 'id_category_parent', 'id_city', 'title', 'address' , 'idEvents', 'idEvents'
        );
    }
    
    public function relations()
    {
        return array(
            'idEvents'=>array(self::HAS_MANY, 'events', 'id_place')
        );
    }
    
    public function attributeLabels() 
    {
        return array(
            'id'=>'ID',
            'id_category_parent'=>'Тип события',
            'id_city'=>'Город',
            'title'=>'Название',
            'address'=>'Адрес (улица, дом)'
        );
    }
    
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
