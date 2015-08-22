<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JoinedEvents
 *
 * @author Ислам
 */
class JoinedEvents extends ActiveRecord
{
    protected static $_table = 'joined_events';
    
    public function safe()
    {
        return array(
            'id', 'id_user', 'id_events'
        );
    }
    
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
