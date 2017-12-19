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
        $record = new account();
        $record = accounts::findUserbyEmail($_REQUEST['email']);

        if ($record == FALSE) {
            print_r("ser not found");
        } else {
            if($record->checkPassword($_POST['psw']) == TRUE) {
                session_start();
                $_SESSION["userID"] = $record->id;
                $_SESSION["userEmail"] = $record->email;
                print_r($_SESSION);
                header('Location: index.php?page=tasks&action=allOneUser&id='.$record->id);
            } else {
                print_r("wrong password");
            }
        }
  	}
    public static function logout()
    {
        session_destroy();
        header('Location: index.php');
    }
}
?>
