<?php
class todo extends database\model {
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    protected static $modelName = 'todo';
public static function getTablename()
    {
        $tableName = 'todos';
        return $tableName;
    }
    public static function findTasks()
    {
        $records = todos::findAll();
        print_r($records);
        return $records;
    }

}
?>
