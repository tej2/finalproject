<?php

class controllerforaccounts extends http\controller

{
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }
public static function all()
    {
        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);
    }
    public static function signup()
    {
        self::getTemplate('New_User');
    }
public static function register()
{
$user = accounts::findUserbyUN($_REQUEST['email']);
    if ($user == FALSE) {
        $record = new account();
        $record->email = $_POST['email'];
        $record->fname = $_POST['fname'];
        $record->lname = $_POST['lname'];
        $record->phone = $_POST['phone'];
        $record->birthday = $_POST['bday'];
        $record->gender = $_POST['gender'];
        //$record->password = $_POST['password'];
        $record->password = $record->setPassword($_POST['password']);
        //print_r($record);
        $record->save();
        header('Location: index.php');
    }
    else{
        echo 'This email is already registered.';
    }
}
    public static function store()
    {
        print_r($_POST);
    }
    public static function update_profile()
    {
        $records = accounts::findOne($_REQUEST['id']);
        $record = new account();
        $record->id=$records->id;
        $record->email=$_POST['email'];
        $record->fname=$_POST['fname'];
        $record->lname=$_POST['lname'];
        $record->phone=$_POST['phone'];
        $record->birthday=$_POST['birthday'];
        $record->gender=$_POST['gender'];
        $record->save();
        session_start();
        
        self::getTemplate('show_account', $record);
    }
    public static function edit_profile()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('edit_account', $record);
    }
    public static function show_profile()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('show_account', $record);
    }
    public static function editPassword()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('Password_change', $record);
    }
    public static function updatePassword()
    {
        $records = accounts::findOne($_REQUEST['id']);
        if($records->checkPassword($_POST['currentPass']) == TRUE){
            if($_POST['newPass1']==$_POST['newPass2']){
                $record = new account();
                $record->id=$records->id;
                $record->password = $record->setPassword($_POST['newPass1']);
                $record->save();
                header('Location: index.php?page=accounts&action=showProf');
            }else{
                echo 'Passwords are not the same.';
            }
        }else{
            echo 'Incorrect password.';
        }
    }
     public static function login()
    {
     $record = new account();
        $record = accounts::findUserbyUN($_POST['login']);
                if ($record == FALSE) {
            print_r("User not found");
        } else {
            if($record->checkPassword($_POST['psw']) == TRUE) {
  session_start();
                $_SESSION["userID"] = $record->id;
                $_SESSION["userEmail"] = $record->email;
                print_r($_SESSION);
                header('Location: index.php?page=tasks&action=allOneUser&id='.$record->id);
            } else {
 print_r("Wrong password.");
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
