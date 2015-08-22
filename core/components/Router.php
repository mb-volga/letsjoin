<?php
/**
 * Данный класс нужен для того, чтобы перенаправлять $_GET['url'] запросы 
 * на нужные контроллеры. 
 * То, что запросы будут поступать именно в таком виде
 * задается в файле .htaccess
 * 
 * @author Ислам
 */
class Router
{
    /**
     *
     * @var string $DEFAULT_CTRL Контролле по умолчанию
     * @var string $DEFAULT_ACT Экшен по умолчанию
     */
    private static $DEFAULT_CTRL = 'SiteController';
    private static $DEFAULT_ACT = 'actionIndex';

    private $controllerClass = 'Controller';
    private $controllerAction = 'action';
    private $param = array();

    
    /**
     * Запускает роутер.
     */
    public function start() 
    {
        $this->parseURI();
        
        if (
            ( $RefParentClass = new ReflectionMethod($this->controllerClass, $this->controllerAction) )&& 
            ( $RefParentClass->getNumberOfRequiredParameters() <= count($this->param) ) &&
            ( $RefParentClass->getNumberOfParameters()         >= count($this->param) )
           ) {
              $controller = new $this->controllerClass;
              
              $controller->controller = str_replace('Controller', '', $this->controllerClass);
              $controller->action = str_replace('action', '', $this->controllerAction);
              $controller->id = $controller->controller .'/'.$controller->action;
              
              $RefParentClass->invokeArgs($controller, $this->param);
        }         
    }
        
    
    /**
     * 
     * @return \Router Возвращает объект текущего класса
     */
    public static function rout()
    {
        return new Router();
    }

    /**
     * 
     * @throws Exception Выбрасывает ошибку, если нет запрашиваемого контроллера или экшена
     */
    private function parseURI()
    {        
        !empty( $_GET['ctrl'] ) ? 
                $this->controllerClass = ucfirst( strtolower( $_GET['ctrl'] ) . $this->controllerClass) :
                $this->controllerClass = self::$DEFAULT_CTRL;


        !empty( $_GET['act'] )  ? 
                $this->controllerAction = $this->controllerAction . ucfirst( strtolower($_GET['act']) ) : 
                $this->controllerAction = self::$DEFAULT_ACT;

        !empty( $_GET['param'] ) ? 
                $this->param[] = $_GET['param'] : 
                $this->param;

        
        if( !class_exists($this->controllerClass)  || !method_exists($this->controllerClass, $this->controllerAction) ){
            throw new Exception( 'Request is invalid' );
        }
    }

}
