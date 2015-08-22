<?php
/**
 * Description of UserController
 *
 * @author Ислам
 */
class UserController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
    
    
    public function actionLogout()
    {
        if(!CApp::app()->isGuest){
            CApp::app()->logout();
        }
        
        $this->redirect('site/index');
    }
    
  
    private function loadModel($id)
    {
        $model = User::model()->findByPk($id);
        if( $model === null)
            throw new Exception ('Не найден пользователь');
        return $model;
    }

    
    public function actionProfile()
    {
            $user = $this->loadModel(CApp::app()->idUser);
            $this->render('profile', array('user'=>$user));
    }
    
/**
 * end class
 */
}
