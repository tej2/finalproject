<!doctype html>

<html>

<form action="index.php?page=all_tasks&action=save_task&id=<?php echo $data->id; ?>" method="post" id="updateForm">
    		<p><?php print table\displayTable::generateFormFromOneRecord($data); ?></p>
			<button type="submit" form="updateForm" value="store" class="edit">Save</button></form>
 			<hr>
  			<a href="index.php?page=all_tasks&action=show&id=<?php echo $data->id; ?> "><button class="cancel">Cancel</button></a>
  			<form action="index.php?page=deleted&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
   			 <button type="submit" form="form1" value="delete" class="delete">Delete</button>
	</form>
</html>
