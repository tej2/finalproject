<!doctype html>
<html>
<head>
<style>
body {
    background-color: lightpink;
}
</style>
</head>
<body>
<center>
<div id="container">       
<form action="index.php?page=accounts&action=login" method="POST">
  <label for="username"><b><h1 style="font-family:verdana;">Username:<b></h1></label>
<input type="text" placeholder="Enter Username" name="email" required><br><br>
  <label for="password"><b><h1 style="font-family:verdana;">Password:</h1></label>
<input type="password" placeholder="Enter Password" name="password" required>
<div id="lower">
  <p><button type="submit"><b><h2 style="font-family:verdana;">Login!</h2></button>
</div>
</form>
</html>
</body>
<a href="index.php?page=accounts&action=register"><p><b><h2 style="font-family:verdana;">Sign Up Here!</h2></a>
</div>
