<!DOCTYPE html>
<html>
    <body>
    <center><h1>Edit the Character Map</h1><br/><br/>
        <a href="add.php">Add a new person</a><br/><br/>
        <h3>Edit an existing person</h3><br/>
<?php
include 'emailupdates.php';
/*$con=mysql_connect('mysql10.000webhost.com','a2059914_sql','admit1');
mysql_select_db('a2059914_people',$con);*/
$rows=scandir('altsql/people/');
//var_dump($rows);
for($row=2;$row!=count($rows);$row++){
    if(strpos($rows[$row],'\\')===FALSE){
        $dispname = str_replace('%22','"',str_replace('%27', "'",substr($rows[$row],0,-4)));
        echo('<a href="edit_person.php?person='.str_replace("'",'&#39',str_replace('"','&#34;',$dispname)).'">'.str_replace('_',' ',$dispname).'</a><br/>');
    }else{
        //echo str_replace('%22','"',str_replace('%27', "'",substr($rows[$row],0,-4)))."<br/>";
    }
}
?>