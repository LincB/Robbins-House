<?php
require 'altsql.php';
$type = $_POST['type'] or $type = $_GET['type'];
$name=trim($_POST['name']) or $name=$_GET['name'];
/*$born=$_POST['born'];
$died=$_POST['died'];
$importance=$_POST['importance'];
$description=$_POST['description'];*/
$uname=str_replace(' ','_',$name);
//$con = mysql_connect('mysql10.000webhost.com','a2059914_sql','admit1');
//mysql_select_db('a2059914_people',$con);
$con=altsql_select_db('people');
if ($type == "add"){
$born=$_POST['born'];
$died=$_POST['died'];
$importance=$_POST['importance'];
$description=$_POST['description'];
//mysql_query('CREATE TABLE '.$uname.'(Name VARCHAR(30), BornOrImportance INT, Died INT, Importance INT, Description VARCHAR(300))',$con);
//mysql_query('INSERT INTO '.$uname.' VALUES ("'.$name.'", '.$born.', '.$died.', '.$importance.', "'.$description.'")',$con);
altsql_create_table($uname,$con);
$inserts=array($name,$born,$died,$importance,$description);
altsql_insert($uname,$inserts,$con);
echo('Person '.$name.' created.<br/><br/><a href="edit.php">Return to edit page</a><br/><a href="index.php" target="_blank">View site</a>');
}
else if($type == "edit"){
$born=$_POST['born'];
$died=$_POST['died'];
$importance=$_POST['importance'];
$description=$_POST['description'];
RemoveOld($con,$name,$uname);
//mysql_query('INSERT INTO '.$uname.' VALUES ("'.$name.'", '.$born.', '.$died.', '.$importance.', "'.$description.'")',$con)or die("Error: ".mysql_error($con));
$inserts=array($name,$born,$died,$importance,$description);
altsql_insert($uname,$inserts,$con);
for($c=1; $c<17; $c++){
$conn[$c]=$_POST['c'.$c];
if($conn[$c] != ''){
$uconn=str_replace(' ','_',$conn[$c]);
//echo($conn[$c].' '.$uconn);
//$sql = 'SELECT * FROM '.$uconn.' WHERE `Name`="'.$conn[$c].'"';
//$result = mysql_query($sql,$con)or die("Error: ".mysql_error($con));
$result=altsql_select($uconn,'*',$con);
$row=$result[0];
$imp=$row[3];
//echo('Imp:'.$imp);
if($imp==''){
echo('Error: Connection '.$conn[$c].' not found.<br/>');
}else{
/*$sql = 'INSERT INTO '.$uname.' (`Name`,`BornOrImportance`) VALUES ("'.$conn[$c].'", '.$imp.')';
mysql_query($sql,$con)or die("Error: ".mysql_error($con).' on command '.$sql);
$sql = 'INSERT INTO '.$uconn.' (`Name`,`BornOrImportance`) VALUES ("'.$name.'", '.$importance.')';
mysql_query($sql,$con)or die("Error: ".mysql_error($con).' on command '.$sql);*/
$inserts=array($conn[$c],$imp,'','','');
altsql_insert($uname,$inserts,$con);
$inserts=array($name,$importance,'','','');
altsql_insert($uconn,$inserts,$con);
}
}
}
echo('Success.<br/><a href="edit.php">Return to edit page</a><br/><a href="index.php" target="_blank">View site</a>');
}
else if($type == "delete"){
RemoveOld($con,$name,$uname);
unlink($con.$uname.'.txt');
}
//mysql_close($con);

function RemoveOld($con,$name,$uname){
//$result = mysql_query('SELECT Name FROM '.$uname.' WHERE Name<>"'.$name.'"',$con)or die("Error: ".mysql_error($con));
$result = altsql_select($uname,'!'.$name,$con);
foreach($result as $row){
$current = $row[0];
$ucurrent = str_replace(' ','_',$current);
/*$begin="DELETE FROM `{$ucurrent}` WHERE";
$sql="$begin Name='{$name}'";
echo($sql);*/
altsql_delete($ucurrent,'='.$name,$con);
//mysql_query($sql,$con)or die("Error: ".mysql_error($con).' on command '.$sql);
}
//$sql='DELETE FROM '.$uname;
//mysql_query($sql,$con)or die("Error: ".mysql_error($con).' on command '.$sql);
altsql_delete($uname,'*',$con);
}

/*function AddConnection($table,$name,$importance){
$result = mysqli_query($con,'SELECT * FROM '.$table.' WHERE Name="'.$name.'"');
while($row = mysqli_fetch_array($result)){
$exists=$row['Importance'];
}
if($exists == ''){

}else{

}
}*/
?>