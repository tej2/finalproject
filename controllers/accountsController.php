<?php

class accountsController extends http\controller

{
    public static function show()
    {
        $record = accounts::findOne($userID);
        self::getTemplate('show_account', $record);
    }
public static function all()
    {
        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);
    }
    public static function register()
    {
        self::getTemplate('register');
    }
public static function store()
{
$user = accounts::findUserbyEmail($_REQUEST['email']);
    if ($user == FALSE) {
        $record = new account();
        $record->email = $_POST['email'];
        $record->fname = $_POST['fname'];
        $record->lname = $_POST['lname'];
        $record->phone = $_POST['phone'];
        $record->birthday = $_POST['birthday'];
        $record->gender = $_POST['gender'];
        $record->password = table\registration::setPassword($_POST['password']);
        $record->save();
        header("Location: index.php?page=accounts&action=all");
    }
    else{
        echo 'Email has already been used.';
    }
}
    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('edit_account', $record);
    }
    
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);
        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        header("Location: index.php?page=accounts&action=all");
    }
    public static function editprofile()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('edit_account', $record);
    }
   public static function delete() {
        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }
    public static function login()
    {
        echo "Welcome!";
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        print_r($user);
        if ($user == FALSE) {
            echo 'user not found';
        } else {
			$password = table\registration::checkPassword($_POST['password'], $user['password']);
			echo $password;
			if($pw == TRUE) {
                echo 'login';
                session_start();
				$_SESSION["userID"] = $user['id'];
				$_SESSION["FName"] =  $user['fname'];
				header("Location: index.php?page=all_tasks&action=all");
            } else {
                echo 'Wrong password!';
            }
        }
    public static function logout()
    {
        session_destroy();
        header('Location: index.php');
    }
}
?>
