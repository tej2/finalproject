<?php
session_start();
print table\displayHTML::generateTableForOneTodo($data);
?>
<html>
<head>
<style>
body {
    background-color: lightpink;
}
</style>
</head>
<body>
<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?> " method="post" id="form1" style="float:left;">
<button class="btn btn-primary text-center" type="submit" form="form1" value="edit">Edit</button></div>
</form>
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2" style="float:right;">
    <button class="btn btn-primary" type="submit" form="form2" value="delete">Delete</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
</form>
</html>
</body>
