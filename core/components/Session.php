<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author Ислам
 */
class Session 
{
    private static $isSession = false;
    
    public static function start()
    {
        if (self::$isSession === false) 
        {
            session_start();
            self::$isSession = true;
        }
    }
    
    /**
     * Проверка на включение сессии
     */
    public static function isSession()
    {
        return self::$isSession;
    }

    
    /**
     * 
     * @param type $key
     * @param type $value
     */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Получить значение сесиии по ключу
     */
    public static function getValue($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    
    public static function hasKey($key) 
    {
        $res = Session::getValue($key);
        return isset($res) ? true : false;
    }
    
    public static function unseted() 
    {
        if (self::$isSession === true) {
            session_unset();
        }
    }

    public static function destroy() 
    {
        if (self::$isSession === true) {
            session_unset();
            session_destroy();
        }
    }
    
    public static function getSession()
    {
        return $_SESSION;
    }
    
    
    public static function delSession($key) {
        unset($_SESSION[$key]);
    }
    
    public function __unset($name) {
        unset($this->property[$name]);
    }
}
