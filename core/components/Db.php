<?php

/**
 * @property $attributes
 * @property $DbConnect
 */

class Db
{
//    private $DbConnect; # Хранит связь с бд
//    private $username;
//    private $password;
//    private $dsn;
//    private $className = 'stdClass';
    
    private $property = array();
    
    public function __construct() 
    {
        # При создании объекта этого класса, устанавливается 
        # автоматически соединение с БД
        # Данные по подключению подгружаются из файла 
        # /config/database.php'
        $connect_db = require __DIR__ . '/../../protected/config/database.php';
        $connect_db['className'] = 'stdClass';  
        $this->attributes = $connect_db;
        
        try {
            $this->DbConnect = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $ex) {
            $data['code'] = $ex->getCode();
            $data['file'] = $ex->getFile();
            $data['line'] = $ex->getLine();
            Logger::writeLogs($data);
        }
        
    }

    public function __destruct() 
    {
        $this->DbConnect = null;
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }
    
    public function query($query, $params = array())
    {
        if(!isset($this->DbConnect)) return;

        $sth = $this->DbConnect->prepare($query);   # передаем запрос и параметры
        $sth->execute($params);             # execute выполняет запрос
        $data = $sth->fetchAll(PDO::FETCH_CLASS, $this->className); # fetchAll возвращает все строки заданного типа $this->className

        return (!empty($data)) ? $data : false;
    }
    
    public function execute($query, $params = array())
    {
        if( $this->DbConnect ) {
            $sth = $this->DbConnect->prepare($query);
            return $sth->execute($params);
        }
    }

    public function lastInsertId()
    {
        return $this->DbConnect->lastInsertId();
    }

    public function __set($name, $value) 
    {
        if($name === 'attributes' && is_array($value))
        {
            foreach ($value as $key => $v) {
                $this->property[$key] = $v;
            }
        } else {
            $this->property[$name] = $value;
        }
    }
    
    public function __isset($name) {
        return isset($this->property[$name]);
    }
    
    public function __unset($name) {
        unset($this->property[$name]);
    }

        public function __get($name) {
        return $this->property[$name];
    }

}