<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Ислам
 * @property string $nickname Никнейм пользователя
 * @property int $id_city Город проживания
 * @property string $email Электронная почта
 * @property $password Пароль
 * @property $idLabel Метка
 * @property $nicknameLabel
 * @property $ban Бан
 * @property $nickname Никнейм
 * @property $id ID
 * @property $email Email
 * @property $activation_key Ключ активации
 * @property $role Роль пользователя
 */
final class User extends ActiveRecord
{
    protected static $_table = 'user';

    public function safe()
    {
        return array(
            'id', 'nickname', 'email', 'phone', 'activation_key', 'role', 'password',  'ban', 'id_city',
//            'idEvent', 'idFriends'
        );
    }
    
    public function relations()
    {
        return array(
            'idEvent'=>array(self::HAS_MANY, 'events', 'id_user'),
            'idFriends'=>array(self::HAS_MANY, 'friends', 'id_user')
        );
    }    
    
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'nickname'=>'Ник',
            'email'=>'Email',
            'ban'=>'Бан',
            'id_city'=>'Город',
            'phone'=>'Телефон',
            'password'=>'Пароль'
        );
    }
    

    public function beforeSave()
    {
        if($this->isNewRecord){
            $this->role = 1;
            $this->activation_key = uniqid( md5( microtime(true) ), true );
            $this->password = sha1($this->password);
        }
    }   
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function loadModel($id)
    {
        $model = $this->findByPk($id);
        if( !$model )
            throw new Exception('Пользователь не найден!');
        return $model;
    }

    
    public function _ban($ids = array(), $ban = null)
    {
        if( empty($ids) || $ban === null ) return;
        
        foreach ($ids as $id) {
            $user = $this->loadModel($id);
            if( $user ){
                $user->ban = $ban;
                $user->save();
            }
        }
    }
    
    
       
    public function _delete($ids = array())
    {
        if( empty($ids) ) return;
        
        foreach ($ids as $id) {
            $user = $this->loadModel($id);
            $user->delete();
        }
    }
    
}
