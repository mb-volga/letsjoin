<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProposedCategorys
 *
 * @author Ислам
 * @property $id
 * @property $id_category_parent
 * @property $title
 */
class ProposedCategorys extends ActiveRecord
{
    protected static $_table = 'proposed_categorys';
    
    public function safe()
    {
        return [
            'id', 'id_category_parent', 'title'
        ];
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
