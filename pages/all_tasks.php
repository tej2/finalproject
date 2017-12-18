<!DOCTYPE html>

<html>
<head>
<style>
body {
    background-color: lightpink;
}
</style>
</head>
<?php
print table\displayHTML::genarateTableFromMultiArray($data);
?>
<a href="index.php?page=create&action=addTask"><button class="edit">Create a Task</button></a>

</html>
</body>
