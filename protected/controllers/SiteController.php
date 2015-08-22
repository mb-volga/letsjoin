<?php

/**
 * Description of SiteController
 *
 * @author Ислам
 * @property $titlePage Заголовок страницы в браузере
 */
class SiteController extends Controller
{
    /**
     * Экшен по умолчанию
     */
    
    public function actionIndex()
    {
        $model = Category::model()->findByAttributes(array(
                'where'=>'id_parent = 0',
                'order by'=>'counter desc'
            ));
        
       
        $this->render('index', array('items'=>$model));
    }
    
    /**
     * События
     */
    public function actionEvents()
    {
        $events = Events::model()->findAll();
        
        $places = [];
        
        foreach ($events as $event) 
        {
            if( !key_exists($event->id, $places) ){
                $places[$event->id] = Places::model()->findByPk($event->id_place);
            }
        }
        
        
        
        $this->render('events', array('events'=>$events, 'places'=>$places));
    }

    /**
     * Регистрация
     */
    public function actionRegistration()
    {
        if(isset($_POST['registration']))
        {
            $user = new User;
            $user->attributes = $_POST['registration'];
            
            $user->save() ? 
                CApp::app()->setFlash('reg', 'Регистрация прошла успешно!') :
                CApp::app()->setFlash('reg', 'Регистрация не удалась!');
        }
        
        $this->render('registration', array(
                'regions'=>Region::model()->findAll(),
                'citys'=>City::model()->findAll()
            ));
    }
    
    /**
     * Вход в систему
     */
    public function actionLogin()
    {
        $model = new LoginForm;
        if( isset($_POST['login']) )
        {
            $model->attributes = $_POST['login'];
            $model->authenticate();
        } 
        
        CApp::app()->isGuest ? $this->render('login', array('model'=>$model)) : $this->redirect('site/index');
    }

    
    public function accessRules() 
    {
        return array(
            array(
                'allow',
                'actions'=>array('index', 'login', 'registration'),
                'users'=>'*'
            ),
        );
    }
    
    
/**
 * end class
 */    
}