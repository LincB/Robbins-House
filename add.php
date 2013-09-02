<!DOCTYPE html>
<html>
<body>
<form action="process.php" method="POST" id="form">
<input type="hidden" name="type" value="add"/>
<p>Full name: <input type="text" name="name" id="name"></p>
<input type="hidden" name="born" value="1">
<input type="hidden" name="died" value="1">
<p>Importance (1-10, 1=not important): <input type="text" name="importance"></p>
<p>Description: <input type="text" name="description" maxlength="300" id="desc"></p>
<p><input type="button" value="Submit" onclick="checkForbidden()"></p>
</form>
    <script>
    function checkForbidden(){
var name = document.getElementById('name').value;
var desc = document.getElementById('desc').value;
if(name.indexOf('"') != -1 || name.indexOf("'") != -1){
    alert('Name or description contains a forbidden character " or \'');
}else{
    document.getElementById('form').submit();
}
}
    </script>
</body>
</html>
