<?php
$query = $_GET['search'] or '';
if($query != ''){
    $files = scandir('altsql/people/');
    $ftquery = str_replace("'",'%27',str_replace('"','%22',str_replace(' ','_',$query)));
    $numhits = 0;
    $hits = array();
    for($fnum = 2;$fnum < count($files);$fnum++){
        if(is_numeric(stripos($files[$fnum],$ftquery))){
            $hits[$numhits] = str_replace('%27',"'",str_replace('%22','"',str_replace('_',' ',substr($files[$fnum],0,-4))));
            $numhits++;
        }
        if($numhits == 14){
            break;
        }
    }
    echo(implode('~',$hits).'~');
}
?>
