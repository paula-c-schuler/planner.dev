<?php
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link rel="stylesheet" a href="/css/site.css" >
	
</head>
<body>
	<h1>To Do List</h1>
	<ul>
		<li>Practice Mac shortcuts</li>
		<li>Practice Command Line codes</li>
		<li>Get parking pass</li>
	</ul>
	<p>
	<form method="POST" action="todo_list.php">
		<label for="todolist" >Add to To Do List</label>
		<input type="text" id="todolist" name="todolist" >
		<input type="submit" value="Add">
	</form>
	</p>
</body>
</html>
