<!doctype html>

<html>
<body>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <br>

        <button type="submit">Login</button>
    </div>
    </div>

</form>
<form id="login-form" action="index.php?page=accounts&action=signup" method="post">
<p><b>SIGN UP HERE!</b><p id="login" class="signup"><input type="submit" name="commit" value="Signup"></p>


</body>
</html>
