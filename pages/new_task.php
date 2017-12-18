
<!doctype html>

<html>


<form action="index.php?page=tasks&action=create" method="post">
        Owner Email: <input type="text" name="owneremail" value="<?php echo $data->owneremail ?>"><br/>
        Owner ID: <input type="text" name="ownerid" value="<?php echo $data->ownerid ?>"><br/>
        Create Date: <input type="text" name="createddate"><br/>
        Due Date: <input type="text" name="duedate"><br/>
        Message: <input type="text" name="message"><br/>
        Is Done: <input type="text" name="isdone"><br/><br>

        <button type="submit" id="create">Add</button>
    </form>


</body>
