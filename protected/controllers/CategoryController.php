<?php

class CategoryController extends Controller
{
    public function actionGroups($parent = null)
    {
        $rules = [];
        foreach(Category::model()->findAll() as $rule){
            $rules[] = $rule->link;
        }

        if(in_array($parent, $rules)){
            $id = Category::model()->findByAttributes(array('WHERE'=>'link ="'.$parent.'"'))[0]->id;
            $models = Category::model()->findByAttributes(array('WHERE'=>'id_parent = "'.$id .'"'));
        } else {
            $models = null;
        }
        $this->render('index', array('items'=>$models));
    }

    public function actionEvents($id = null)
    {
        $models = Events::model()->findByAttributes(['WHERE'=>'id_category_parent="'.$id.'"']);

        $this->render('events', ['items'=>$models]);
    }

    public function actionEvent($id = null)
    {
        $models = Events::model()->findByPk($id);

        $this->render('event', ['item'=>$models]);
    }
}
