<!doctype html>

<html>
	
<head>
<style>
body {
    background-color: lightpink;
}
</style>
</head>
	
<form action="index.php?page=all_tasks&action=update&id=<?php echo $data->id; ?>" method="post" id="updateForm">
<?php 
	print table\displayHTML::generateFormFromOneRecord($data); 
?></p>
<button type="submit" form="updateForm" value="store" class="edit">Save</button></form>
<a href="index.php?page=all_tasks&action=show&id=<?php echo $data->id; ?> "><button class="cancel">Cancel</button></a>
<form action="index.php?page=complete&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
<button type="submit" form="form1" value="delete" class="delete">Delete</button>
</form>
</html>
