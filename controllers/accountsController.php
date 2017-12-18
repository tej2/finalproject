<?php

class accountsController extends http\controller

{
    public static function show()
    {
        session_start();
        if(key_exists('userID',$_SESSION)) {
            $userID = $_SESSION['userID'];
        } else {
            echo 'Log in to view tasks!';
        }
        $userID = $_SESSION['userID'];
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
        header('Location: index.php?page=accounts&action=all');
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
        header("Location: index.php?page=tasks&action=alltasks&id=".$_REQUEST['id']);
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
        } else if($user->checkPassword($_POST['password']) == TRUE) {
                echo 'Please login!';
                session_start();
                $_SESSION["userID"] = $user->id;
                //forward the user to the show all todos page
                print_r($_SESSION);
                header("Location: index.php?page=tasks&action=alltasks&id=".$user->id);
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
