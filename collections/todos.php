<?php
class todos extends database\collection
{
    protected static $modelName = 'todo';
    public static  function findTasksbyUSERID($userid) {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid = ?';
        $recordsSet = self::getResults($sql);
        return $recordsSet;
    }
}
?>
