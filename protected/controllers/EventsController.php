<?php

class EventsController extends Controller
{
    public function actionIndex($id)
    {
        $models = Events::model()->findByAttributes(['WHERE'=>'id_category_parent='.$id]);
        $this->render('index', ['items'=>$models]);
    }

}