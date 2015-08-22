<?php

/**
 * Description of Controller
 *
 * @author Ислам
 * @property array $_property
 */
abstract class Controller
{
    protected $_property = array();
    protected static $path;
    private static $ACCESS_ALL = '*';
    private static $ACCESS_Reg = '@';


    public function beforeAction($action, $param = array())
    {
        $rules = $this->accessRules();
        
        $action = $this->createAction($action);
        
        $this->$action;
        
        if(!empty($rules[0]) && !empty($rules[1]))
        {
            
        }
        
        print_r( $action );
    }
    
    private function createAction($action)
    {
        return ($action === '' || !method_exists($this, $action)) ? 
                'action' . $this->defaultAction  : 
                'action' . ucfirst(strtolower($action));
        
    }

    public function accessRules()
    {
        return array();
    }

    public function render( $template, $data = array() ) 
    {
        $path = APP_DIR . '/protected/views/';
        
        $loader = new Twig_Loader_Filesystem($path);
        $twig = new Twig_Environment($loader, array(
                'cache'=>APP_DIR . '/asset/',
                'auto_reload'=>true
            ));
        
        $tmpl = strtolower($this->controller) .'/'. $template . '.twig';
        $twig->loadTemplate($tmpl);
        
        $data['CHtml'] = new CHtml;
        $data['CApp'] = new CApp;
        $data['this'] = $this;
        
        echo $twig->render($tmpl, $data);
    }
    
    
    public function redirect($url)
    {
        CApp::app()->redirect($url);
    }
    
    
    public function __set($name, $value) 
    {
        $this->_property[$name] = $value;
    }
    
    public function __get($name)
    {
        if( !isset($this->_property[$name]) )
            throw new Exception("Не найдено свойство $name ");
        
        return $this->_property[$name];
    }
    
    public function __isset($name)
    {
        return isset( $this->_property[$name] );
    }
    
    public function __unset($name)
    {
        unset( $this->_property[$name] );
    }
}
