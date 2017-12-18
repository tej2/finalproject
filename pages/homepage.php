<!doctype html>

<html>
<body>


<h2>
    <?php
    echo $data['site_name'];
    ?> </h2>

<h3><a href="index.php?page=accounts&action=all">Show All Accounts</a></h3>
<h3><a href="index.php?page=tasks&action=all">Show All Tasks</a></h3>

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
<h3><a href="index.php?page=accounts&action=signup">New User?</a></h3>


</body>
</html>
