<body>
<?php
require 'altsql.php';
$person = $_GET['person'];
//echo($person);
$rperson = str_replace('_',' ',$person);
$safeperson = str_replace("'",'%27',str_replace('"','%22',$person));
//$con = mysql_connect('mysql10.000webhost.com','a2059914_sql','admit1');
//mysql_select_db('a2059914_people',$con);
//$result = mysql_query('SELECT * FROM '.$person);
$con=altsql_select_db('people');
$result=altsql_select($safeperson,'*',$con) or array();
//var_dump($result);
echo('<script>setTimeout(function(){');
$c=0;
foreach($result as $row){
    if($row[0] == $rperson){
        $born = $row[1];
        $died = $row[2];
        $importance = $row[3];
        $description = $row[4];
        echo('document.getElementById("name").value="'.addslashes($rperson).'";');
//echo('document.getElementById("born").value='.$born.';');
//echo('document.getElementById("died").value='.$died.';');
        echo('document.getElementById("imp").value='.$importance.';');
        echo('document.getElementById("desc").value="'.addslashes($description).'";');
    }else{
        $name = $row[0];
        $c++;
        echo('document.getElementById("c'.$c.'").value="'.addslashes($name).'";');
    }
}
echo('},250);</script><h3>Edit '.$rperson.'</h3>');
?>
    <form action="process.php" method="post" id="form">
        <input type="hidden" name="type" value="edit"/>
        <p>Full name: <input type="text" name="name" id="name" readonly></p>
        <input type="hidden" name="born" id="born" value="1">
        <input type="hidden" name="died" id="died" value="1">
        <p>Importance (1-10, 1=not important): <input type="text" name="importance" id="imp"></p>
        <p>Description:<br/><textarea name="description" id="desc" rows="25" cols="25"></textarea></p>
        <p>Connection 1: <input type="text" name="c1" id="c1"></p>
        <p>Connection 2: <input type="text" name="c2" id="c2"></p>
        <p>Connection 3: <input type="text" name="c3" id="c3"></p>
        <p>Connection 4: <input type="text" name="c4" id="c4"></p>
        <p>Connection 5: <input type="text" name="c5" id="c5"></p>
        <p>Connection 6: <input type="text" name="c6" id="c6"></p>
        <p>Connection 7: <input type="text" name="c7" id="c7"></p>
        <p>Connection 8: <input type="text" name="c8" id="c8"></p>
        <p>Connection 9: <input type="text" name="c9" id="c9"></p>
        <p>Connection 10: <input type="text" name="c10" id="c10"></p>
        <p>Connection 11: <input type="text" name="c11" id="c11"></p>
        <p>Connection 12: <input type="text" name="c12" id="c12"></p>
        <p>Connection 13: <input type="text" name="c13" id="c13"></p>
        <p>Connection 14: <input type="text" name="c14" id="c14"></p>
        <p>Connection 15: <input type="text" name="c15" id="c15"></p>
        <p>Connection 16: <input type="text" name="c16" id="c16"></p>
        <p><input type="button" value="Submit" onclick="checkForbidden();"> &nbsp;&nbsp;
            <input type="button" value="Delete" style="background-color:red;" onclick="confirmDelete();"></p>
        <script>
            function confirmDelete(){
                var check=confirm("Are you sure you want to delete <?php echo addslashes($rperson); ?>?");
                //alert(check);
                if(check){
                    var xmlhttp=new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function()
                    {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            window.location.href="http://robbinshouse.hostoi.com/edit.php";
                        }
                    }
                    xmlhttp.open("GET","http://robbinshouse.hostoi.com/process.php?type=delete&name=<?php echo(addslashes($rperson)); ?>",true);
                    xmlhttp.send();
                    //window.location.href="http://robbinshouse.hostoi.com/process.php?type=delete&name=<?php echo($rperson); ?>";
                }
            }
            function checkForbidden(){
                var name = document.getElementById('name').value;
                var desc = document.getElementById('desc').value;   
                document.getElementById('form').submit();
            }
        </script>
    </form>
</body>