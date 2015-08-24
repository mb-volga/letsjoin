<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CModel
 *
 * @author Ислам
 * @property $attributes
 */
abstract class Model implements JsonSerializable
{
    
    protected $_property = array();

    protected static $_models = array();
    

    public function jsonSerialize()
    {
        return $this->_property;
    }

    protected function safe() {
        return array();
    }
                 
    protected function attributeLabels() {
        return array();
    }


    public function getAttributeLabel($label)
    {
        $labels = $this->attributeLabels();
        $label = strtolower($label);
        
        if(isset($labels[$label])){
            return $labels[$label];
        } 
        
        return null;
    }

    public function __isset($name) {
        return isset($this->_property[$name]);
    }


    public function __set($name, $value)
    {
        if($name === 'attributes' && is_array($value))
        {
            foreach ($value as $key=>$v) 
            {
                if(in_array($key, $this->safe())) {
                    $this->_property[$key] = $v;
                }
            }
        } else {
            $this->_property[$name] = $value;
        }
    }
    
    public function __get($name) {
        return isset($this->_property[$name]) ?  $this->_property[$name] : null;
    }
    
    public function __unset($name) {
        unset($this->_property[$name]);
    }
}
