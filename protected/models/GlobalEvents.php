<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GlobalEvents
 *
 * @author Ислам
 */
class GlobalEvents extends ActiveRecord
{
    protected static $_table = 'global_events';
    
    public function safe()
    {
        return array(
            'id', 'title', 'address', 'event_come', 'create_event', 'link', 'photo'
        );
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
