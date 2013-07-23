<!DOCTYPE html>
<html>
<body>
<form action="process.php" method="POST">
<input type="hidden" name="type" value="add"/>
<p>Full name: <input type="text" name="name"></p>
<input type="hidden" name="born" value="1">
<input type="hidden" name="died" value="1">
<p>Importance (1-10, 1=not important): <input type="text" name="importance"></p>
<p>Description: <input type="text" name="description" maxlength="300"></p>
<p><input type="submit" value="Submit"></p>
</form>
</body>
</html>
