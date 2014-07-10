<?php
$name = $_GET['name'];
/*$con = mysqli_connect('mysql10.000webhost.com','a2059914_sql','admit1','a2059914_people');
$uname= str_replace(' ','_',$name);
$data = mysqli_query($con,'SELECT * FROM '.$uname);
while($row = mysqli_fetch_array($data))
{
if($row['Name']==$name)
{
echo($row['BornOrImportance'].'~'.$row['Died'].'~'.$row['Importance'].'~'.$row['Description'].'*');
}else{
echo($row['Name'].'~'.$row['BornOrImportance'].'*');
}
}
mysqli_close($con);
*/
require 'altsql.php';
$con=altsql_select_db('people');
$uname=str_replace(' ','_',$name);
$safeuname = str_replace("'",'%27',str_replace('"','%22',$uname));
$data=altsql_select($safeuname,'*',$con);
foreach($data as $row){
    if($row[0]==$name){
        echo($row[1].'~'.$row[2].'~'.$row[3].'~'.stripslashes($row[4]).'*');
    }else{
        echo($row[0].'~'.$row[1].'*');
    }
}
//$output = file('altsql/people/'.$safeuname.'.txt');
//echo($output[0]);
?>