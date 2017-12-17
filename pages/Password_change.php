<?php include 'headerPage.php' ?>



<?php

?>

<form action="index.php?page=accounts&action=updatePassword&id=<?php echo $data->id; ?> " method="post" id="form1">
<p><b>Enter your current password:</b></label>
<p><input type="text" name="currentPass" required>
<p><b>Enter new Password</b></label>
<p><input type="text" name="newPass1">
<p><b>Re-enter Password</b></label>
<p><input type="text" name="newPass2">
<p><button class="btn btn-primary" type="submit" form="form1" value="save">Update Password</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>

</form>

</body>

</html>
