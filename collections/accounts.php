<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';
  
    public static  function findUserbyEmail($email) {
        $tableName = get_called_class();
        $sql = "SELECT email FROM $tableName WHERE email= '$email'";

        $recordsSet = self::getResults($sql, $email);
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet[0];
        }
      
    }
}
