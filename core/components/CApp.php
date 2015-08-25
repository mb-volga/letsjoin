<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author Ислам
 * @property array $property
 * @property bool $isGuest Проверка авторизации
 * @property int $idUser ID пользователя
 * @property string $nickName Nickname пользователя
 * @property string $dirApp Корень приложения
 */
class CApp
{
    protected $property = array();
    private static $app;

    public function __construct() 
    {
        $this->dirApp = dirname($_SERVER['SCRIPT_NAME']);
        $this->setGuest();
    }
    
    public static function app()
    {
        if(!isset(self::$app)){
            self::$app = new self;
        }
        return self::$app;
    }
    
    public function logout()
    {
        $this->property = array();
        Session::unseted();
        Session::destroy();
    }

    private function setUserID()
    {
        $this->isGuest 
                ? $this->property['idUser'] = null
                : $this->property['idUser'] = Session::getValue('UID');
    }

    private function setUserNickName()
    {
        $this->isGuest 
                ? $this->property['nickName'] = null
                : $this->property['nickName'] = Session::getValue('UNickname');
    }

    private function setGuest()
    {
        Session::hasKey('UID') 
                ? $this->property['isGuest'] = false 
                : $this->property['isGuest'] = true;
        
        $this->setUserID();
        $this->setUserNickName();
    }


    public function __set($name, $value) {
        $this->property[$name] = $value;
    }
    
    public function __get($name)
    {
        return isset($this->property[$name]) ? $this->property[$name] : null;
    }

    public function __isset($name) 
    {
        return isset($this->property[$name]);
    }


    public function setFlash($key, $value)
    {
        Session::set($key, $value);
    }    
    public function getFlash($key)
    {
        $flash = Session::getValue($key);
        $this->delFlash($key);
        return $flash;
    }
    public function hasFlash($key)
    {
        return Session::getValue($key) ? true : null;
    }
    
    public function delFlash($key)
    {
        Session::delSession($key);
    }
    
    public function redirect($url)
    {
        $exp_url = explode('/', $url);
        
        $loc = CApp::app()->dirApp.'/'.$exp_url [0].'/' . $exp_url [1];
        
        isset($array_url[2]) ? $loc .='/'.$array_url[2] : $loc;

        header("Location:  {$loc}");
        exit();
    }

    public function endApp(){
        exit();
    }
}
