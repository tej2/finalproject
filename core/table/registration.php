<?php
namespace table;
class registration
{
    public static function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
		
        return $password;
    }
    
	public static function checkPassword($password, $hash) {
    	if (password_verify($password, $hash)) {
			return TRUE;
			} 
		else {
			return FALSE;
		}
 
 	}
}
?>
