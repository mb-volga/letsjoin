<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author Ислам
 */

class AdminController extends Controller
{

    public function actionIndex() 
    {
        User::model()->findByPk(1);
        $this->render('index');
    }    
    
    /*---------------- start REGION ----------------*/
    public function actionRegions()
    {
        $regions = Region::model()->findAll();
        $this->render('regions/regions', array('regions'=>$regions));
    }
    public function actionNewregion()
    {
        $region = new Region;
        
        if( isset($_POST['region']) )
        {
            $region->attributes = $_POST['region'];
            $region->save() ?
                CApp::app ()->setFlash ('save', 'Регион добавлен') :
                CApp::app ()->setFlash ('save', 'Регион не добавлен');
        }
        
        $this->render('regions/_create', array('region'=>$region));
    }

    /*---------------- end REGION ----------------*/






    /*-----------  USER -------------*/
    public function actionViewuser($id) 
    {
        $this->render('users/profile', array('user'=>User::model()->findByPk($id)));
    }
    
    public function actionUsers()
    {
        # Если выбраны пользователи
        if(!empty($_POST['users']))
        {
            # Проверка нажатой кнопки
            if(isset($_POST['del'])){
                User::model()->_delete( $_POST['users'] );
            }
            elseif(isset($_POST['setban']))
                User::model()->_ban($_POST['users'], 1) ;//$this->setBanUsers($_POST['users']);
            
            elseif(isset($_POST['unsetban']))
                User::model()->_ban($_POST['users'], 0);
            
        } 
        
        $users = User::model()->findAll();
        $this->render('users/users', array('users'=>$users));
    }
    
    public function actionAddusers()
    {
        if(isset($_POST['registration']))
        {
            $user = new User;
            $user->attributes = $_POST['registration'];
            
            $user->save() 
                    ?   CApp::app()->setFlash('reg', 'Регистрация прошла успешно!')
                    :   CApp::app()->setFlash('reg', 'Регистрация не удалась!');
        }
        
        $this->render('users/registration', array(
                'citys'=>City::model()->findAll(), 
                'regions'=>Region::model()->findAll(),
                'user'=>User::model(),
            ));
    }
    
   
 
    
    /* --------------  end user  -----------------------*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
/**
 * end class
 */
}
