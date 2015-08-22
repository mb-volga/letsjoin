<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Friends
 *
 * @author Ислам
 */
class Friends extends ActiveRecord
{
    protected static $_table = 'friends';
    
    public function safe() 
    {
        return array( 'id', 'id_user', 'id_friend' );
    }
    
    public function attributeLabels() 
    {
        return array(
            'id'=>'ID',
            'id_user'=>'Вы',
            'id_friend'=>'Ваш друг'
        );
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
