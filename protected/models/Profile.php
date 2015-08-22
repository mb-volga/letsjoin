<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author Ислам
 */
class Profile extends ActiveRecord
{
    protected static $_table = 'profile';
    
    public function safe()
    {
        return array(
            'id', 'firstname', 'secondname', 'birthday', 'id_user', 'id_city', 'avatar'
        );
    }
    
    
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'firstname'=>'Имя',
            'secondname'=>'Фамилия', 
            'birthday'=>'День рождения', 
            'id_user'=>'ID пользователя', 
            'id_city'=>'ID города', 
            'avatar'=>'Аватар'
        );
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
