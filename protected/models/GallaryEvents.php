<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallary
 *
 * @author Ислам
 */
class GallaryEvents extends ActiveRecord
{
    protected static $_table = 'gallary_events';
    
    
    public function safe()
    {
        return array(
            'id', 'alt', 'src', 'id_gallary', 'idIvents'
          
        );
    }
    
    public function relations()
    {
        return array(
            'idIvents'=>array(self::HAS_MANY, static::$_table, 'photos_gallary', 'id_gallary')
        );
    }    
    
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'alt'=>'Альтернативеый текст',
            'src'=>'Путь к картинке',
            'id_gallary'=>'Номер галлереи'
        );
    }
    
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
}
