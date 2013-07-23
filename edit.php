<!DOCTYPE html>
<html>
<body>
<center><h1>Edit the Character Map</h1><br/><br/>
<a href="add.php">Add a new person</a><br/><br/>
<h3>Edit an existing person</h3><br/>
<?php
/*$con=mysql_connect('mysql10.000webhost.com','a2059914_sql','admit1');
mysql_select_db('a2059914_people',$con);*/
$rows=scandir('altsql/people/');
for($row=2;$row!=count($rows);$row++){
echo('<a href="edit_person.php?person='.substr($rows[$row],0,-4).'">'.str_replace('_',' ',substr($rows[$row],0,-4)).'</a><br/>');
}
?>