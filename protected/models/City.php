<?php


/**
 * Description of City
 *
 * @author Ислам
 */
class City extends ActiveRecord
{
    protected static $_table = 'city';
    
    public function safe() 
    {
        return array( 
            'id', 'title', 'id_region' , 'idEvents'
        );
    }
    
    public function relations() 
    {
        return array(
            'idEvents'=>array(self::HAS_MANY, 'events', 'id_city'),
        );
    }
    
    public function attributeLabels() 
    {
        return array(
            'id'=>'ID',
            'title'=>'Город'
        );
    }

        public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
