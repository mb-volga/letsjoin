<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegModel
 *
 * @author Ислам
 */
class LoginForm extends FormModel
{
    public function safe()
    {
        return array(
            'username', 'password', 'identity'
        );
    }

    public function authenticate()
    {
        (bool)$this->identity = new UserIdentity($this->username,$this->password);
        if( !$this->identity->authenticate() )
            CApp::app()->setFlash ('login', 'Неверный логин или пароль');
    }
    
    public function attributeLabels() 
    {
        return array(
            'login'=>'Email, nickname, номер телефона',
            'paswword'=>'Пароль'
        );
    }
}
