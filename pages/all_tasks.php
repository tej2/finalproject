<!DOCTYPE html>

<html>
<body>
<div class="search-box">
<button class="dismiss"><i class="icon-close"></i></button>
<form id="searchForm" action="#" role="search">
<input type="search" placeholder="Search" class="form-control">
</form>
</div>
<p><li class="nav-item">
<form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">
<li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
</form>
<p><form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">
<li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button>
</li>
</form> 
<p><ul class="list-unstyled">
<form action="index.php?page=tasks&action=create" method="POST" style="float:left;">
<button class="btn btn-link navbar-btn" class="icon-interface-windows" type="submit"></i>Create Task</button>
</form></ul>

         <?php
print table/displayTable::genarateTableFromMultiArray($data);
?>
</html>
</body>
