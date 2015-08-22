<?php

/**
 * Description of View
 *
 * @author Ислам
 * @property array $property Description
 * @property $attributes
 */
class View
{
    private $property = array();
    
    public function render()
    {
        ob_start();        
            include_once $this->content = $this->path . '/../views/'. $this->controller .'/' .$this->template;
        $content = ob_get_clean();
        
        require_once $this->path . '/../views/layouts/main.php';
    }
    
    
    public function __set($name, $value)
    {
        if(($name === 'attributes') && is_array($value))
        {
            foreach ($value as $key => $v) {
                $this->property[$key] = $v;   
            } 
        } else {
            $this->property[$name] = $value;
        }
    }
    
    
    public function __get($name) 
    {
        return key_exists($name, $this->property) ? $this->property[$name] : null;
    }
}