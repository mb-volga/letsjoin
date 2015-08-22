<?php

/**
 * Description of CModel
 *
 * @author Ислам
 * @property attributes $attributes Массив аттрибутов
 * @property bool $isNewRecord 
 */
abstract class ActiveRecord extends Model
{
    protected static $_table;

    # Если связь между А и В один-ко-многим, 
    # значит В принадлежит А (например, Post принадлежит User);
    # Использовать тогда, когда речь идет о таблице В
    const BELONGS_TO = 'CBelongsToRelation'; # Один ко многим
    
    # Если связь между таблицами А и В один-ко-многим, 
    # значит у А есть много В (например, у User есть много Post);
    const HAS_MANY = 'CHasManyRelation'; 
    

    # Это частный случай HAS_MANY, 
    # где А может иметь максимум одно В 
    # (например, у User есть только один Profile);
    const HAS_ONE = 'CHasOneRelation'; 
    
    
    # MANY_MANY: эта связь соответствует 
    # типу связи многие-ко-многим в БД. 
    # Поскольку многие СУБД не поддерживают 
    # непосредственно этот тип связи, требуется 
    # ассоциативная таблица для преобразования 
    # связи многие-ко-многим в связи один-ко-многим. 
    # 
    # В нашей схеме базы данных этой цели служит таблица tbl_post_category. 
    # В терминологии AR связь MANY_MANY можно описать как комбинацию BELONGS_TO и HAS_MANY. 
    # Например, Post принадлежит многим Category, а у Category есть много Post.
    const MANY_MANY = 'CManyManyRelation'; 
    

    public function __construct()
    {
        $this->setRelations();
        isset($this->id) ? $this->_property['isNewRecord'] = false : $this->_property['isNewRecord'] = true;
    }
    
        
    protected static function model($className=__CLASS__)
    {
        if( isset(self::$_models[$className]) ) {
            return self::$_models[$className];
        } else {        
            self::$_models[$className] = new $className;
            return self::$_models[$className]; 
        }
    }
    
    
    # В дочерних моделях дадаются отношения таблиц.
    # Возвращает ассоциативный массив, где ключом являемся имя отношения
    # array('key_relation' => array(self::Тип_Связи, 'first_table', 'second_table'))
    public function relations()
    {
        return array();
    }   
   

    public function beforeSave() {}

    public function afterSave() {}



    # функция для установления аттрибутов, полученный через констркутор
    # Одним из аттрибутов является отношения, полученные из метода relations()
    private function setRelations()
    {
        $relations = $this->relations();
        if(!empty($relations))
        {
            $this->attributes = $relations;
        }
    }

    # Возвращает массив объекта класса наследника
    public function findAll()
    {
        $db = new Db();
        
        # устанавливаем возвращаемым типом данных имя класса, который вызвал данный метод
        $db->setClassName( get_called_class() );
        $query = self::select();
        
        return $db->query($query);
    }
    
    public function findBySql( $query )
    {
        echo $query;
        die;
        $db = new Db();
        $db->setClassName(get_called_class());
        return $db->query($query);
    }
    

    # Возвращает один объект класса наследника
    public function findByPk($id)
    {
        $db = new Db();
        $db->setClassName(get_called_class());
        
        $query = self::select(array('where'=>'`id`=:id'));
       
        $result = $db->query($query, array(':id'=>$id))[0];
        
        # Проверка на наличие записи. Иначе - false
        (!empty($result))? $result = $result: $result = null;

        # Доступ к свойствам класса в представлении $this->{имя_из_контроллра}->{свойства_класса}
        return $result;
    }
    
    # Метод модели производит поиск по любым заданным полям и возвращает один объект класса наследника
    public function findByAttributes($queryParams = array())
    {
        $query = self::select($queryParams);
        
        $db = new Db();
        $db->setClassName(get_called_class());
        return $db->query($query, $queryParams);
    }
    
    
    final protected function insert()
    {
        $cols = array_keys($this->_property);
        $data = array();
        
        $i = 0;
        foreach ($cols as $col)
        {
            if(is_array($this->_property[$col]) || $col === 'isNewRecord'){
                unset($cols[$i]); $i++;
                continue;
            }
            $data[':' . $col] = $this->_property[$col];
        }
  
        $query = '
            INSERT INTO ' . static::$_table . '
            ('. implode(', ', $cols) .')
            VALUES
            ('. implode(', ', array_keys($data)) .')
        ';
        
        $db = new Db();
        $q = $db->execute($query, $data);    
        $this->id = $db->lastInsertId();
        return $q;
    }
    
    
    protected function update()
    {
        $data = array();
        $cols = array();
        
        foreach ($this->_property as $key=>$value)
        {
            if(is_array($value) || $key === 'isNewRecord')
                continue;
            
            $data[':'.$key] = $value;
            $cols[] = $key .'=:'. $key;
        }
       
        $query = '
            UPDATE '. static::$_table .'
            SET '.  implode(', ', $cols).'
            WHERE id=:id
        ';
        
        $db = new Db();
        return $db->execute($query, $data);
    }
    
    
    protected function delete()
    {
        if($this->isNewRecord){
            return false;
        }
        # Массив $data содержит в себе поля для занемы,
        # то есть     [:id] => 1
        #             [:title] => Волгоград
        $db = new Db();
        $data = array();
        
        foreach ($this->_property as $key=>$value){
            if($key === 'id') {
                $data[':'.$key] = $value;
                break;
            }
        }
        
        # Запрос на удаление
        $query = '';
        
        foreach ($this->_property as $key=>$value)
        {
            # Проверяем, свойство является массивом или нет.
            # Если да, то это, возможно, массив связей таблицы.
            # Переменная $var хранит в себе имя связи, заданном в дочернем классе(модели)
            if(is_array($this->_property[$key]))
            {
                
                # Здесь хранится тип связи
                $typeRelation = $this->_property[$key][0]; 
                
                
                switch ($typeRelation) {
                    case self::HAS_ONE:
                    case self::HAS_MANY:
                        
                        # $query - запрос на удаление
                        $query = "DELETE FROM {$this->_property[$key][1]}
                            WHERE {$this->_property[$key][1]}.{$this->_property[$key][2]}=:id";
                        
                         
                        # Создаем объект модели, которая содержит записи, сслылающиеся на записи из 
                        # тукещей таблицы
                            
                        //$childModel = new $this->property[$key][1];
                        
                        
                        $childModel = ucfirst(strtolower($this->_property[$key][1]));
                        $childModel = new $childModel;
                        $objs = $childModel->findByAttributes(array($this->_property[$key][2]=>$this->id));
                        
                        # Если массив дочерних записей не пуст, удаляем их
                        if(!empty($objs)){
                            foreach ($objs as $obj){
                                $obj->delete();
                            }
                        }
                        
                        # Если из дочерней таблицы записи удалены
                        if($db->execute($query, $data))
                        {
                            $query = '
                                DELETE FROM '. static::$_table .'
                                WHERE id=:id';

                        }
                        else{
                            throw new DBException('Не удалось удалить запись. Проверьте дочерние таблицы.', '', __FILE__, 277);
                            # ТУТ БУДЕТ ИСКЛЮЧЕНИЕ DBException;
                        }
                        break;
                    
                    default:
                        $query = '
                            DELETE FROM '. static::$_table .'
                            WHERE id=:id';
                        break;
                }
            }
        }
        
        return $db->execute($query, $data);
    }

    /**
     * 
     * @return boolean
     */
    public function save() 
    {
        $this->beforeSave();
        return $this->isNewRecord ? $this->insert() : $this->update ();
    }
    
    
    /**
     * 
     * @return string $table
     */
    public function getTableName()
    {
        return static::$_table;
    }

    /**
     * 
     * @param array $query
     * @return string
     */
    private static function select($query = array())
    {
        $select = 'SELECT * FROM `' . static::$_table .'` '. static::getQuery($query);
        return $select;
    }
    
    /**
     * 
     * @param array $queryParams Параметры запроса
     * @return $query
     */
    private static function getQuery($queryParams = array())
    {
        $queryParams = array_change_key_case($queryParams, CASE_UPPER);
        $query = "";
        
        foreach ($queryParams as $key=>&$value)
        {
            $query .= "{$key} {$value} ";
        }
        
        return $query;
    }
    
/**
 * End class ActiveRecord
 */    
}
