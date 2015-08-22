<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserIdentity
 *
 * @author Ислам
 */
class UserIdentity 
{
    private $login;
    private $password;
    private $identity = false;

    public function __construct($login, $pass) 
    {
        $this->login = $login;
        $this->password = sha1($pass);
    }
    
    public function authenticate()
    {
        $user = User::model()->findByAttributes(array(
                'where'=>"email = '$this->login'", 'limit'=>1
            ));
        if( !$user ) {
            $user = User::model()->findByAttributes(array(
                'where'=>"nickname = '$this->login'", 'limit'=>1
            ));
        }
        elseif( !$user ) {
            $user = User::model()->findByAttributes(array(
                'where'=>"phone = '{$this->login}'", 'limit'=>1
            ));
        }
        if( !empty($user) && ($user[0]->password === $this->password) )
        {
            Session::set('UNickname', $user[0]->nickname);
            Session::set('UID', $user[0]->id);
            Session::set('UIdentity', true);
            $this->identity = true;
        }
        
        return $this->identity;
    }
}
