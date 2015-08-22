<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author Ислам
 * @property $id
 * @property $id_user
 * @property $id_place
 * @property $count_player
 * @property $contact
 * @property $team_one
 * @property $team_two
 * @property $team_three
 * @property $team_four
 * @property $result
 * @property $event_come
 * @property $id_category_parent
 * @property $details
 */
class Events extends ActiveRecord
{
    protected static $_table = 'events';
     
    

    public function safe()
    {
        return array(
            'id', 'id_user', 'id_place', 'count_player', 'contact', 'team_one', 'team_two', 'team_three',
            'team_four', 'result', 'event_come', 'id_category_parent', 'details' , 
            
            'idJoinedEvents',
            'idGallaryEvents',
            'idPlace'
        );
    }
    
    public function relations() 
    {
         return array(
            'idJoinedEvents'=>array(self::HAS_MANY, 'joined_events', 'id_events'),
            'idGallaryEvents'=>array(self::HAS_ONE, 'gallary_events', 'id_events'),
            'idPlace'=>array(self::BELONGS_TO, 'places', 'id_place')
        );
    }
    
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
