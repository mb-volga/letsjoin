<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Ислам
 */
class Category extends ActiveRecord
{
    protected static $_table = 'category';
    
    public function safe() 
    {
        return array(
            'id', 'id_parent', 'title', 'counter'
        );
    }
    
    public function attributeLabels() 
    {
        return array(
            'id'=>'ID',
            'id_parent'=>'Подкатегория',
            'title'=>'Название'
        );
    }
    
    public function relations() 
    {
        return array(
            'idParent'=>array(self::HAS_MANY, self::$_table, 'id_parent'),
        );
    }

        public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
