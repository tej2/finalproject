<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';
  
    public static  function findUserbyEmail($email) {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' .$tableName . ' WHERE email ="' . $email.'"';

        $recordsSet = self::getResults($sql);
        if (is_null($recordsSet)) {
            echo "False";
            return FALSE;
        } else {
            echo "True";
            return $recordsSet[0];
        }
      
    }
}
?>
