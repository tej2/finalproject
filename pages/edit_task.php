<!doctype html>

<html>

<body>


<form action="index.php?page=tasks&action=updateTask&id=<?php echo $data->id ?>" method="POST">
    Owner email: <input type="text" name="owneremail" value="<?php echo $data->owneremail ?>"><br>
    Owner id: <input type="text" name="ownerid" value="<?php echo $data->ownerid ?>"><br>
    Created date: <input type="text" name="cdate" value="<?php echo $data->createddate ?>"><br>
    Due date: <input type="text" name="ddate" value="<?php echo $data->duedate ?>"><br>
    Message: <input type="text" name="message" value="<?php echo $data->message ?>"><br>
    isdone: <input type="text" name="isdone" value="<?php echo $data->isdone ?>"><br>
    <br>
    <button type="submit">Update</button>
</form>
=
</body>
</html>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id ?>" method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
