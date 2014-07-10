<?php
function altsql_select_db($db){
    return('altsql/'.$db.'/');
}

function altsql_create_table($table,$con){
    $file=fopen($con.$table.'.txt','a');
    fclose($file);
}

function altsql_select($table,$where,$con){
    $raw=file($con.$table.'.txt');
    $read=$raw[0];
    $array=explode('*',$read);
    $index=0;
    $output=array();
    foreach($array as $line){
        if($line != ''){
            $row=explode('~',$line);
            if($where == '*'){
                $output[$index]=$row;
                $index++;
            }
            if(substr($where,0,1) == '='){
                if(substr($where,1) == $row[0]){
                    $output[$index]=$row;
                    $index++;
                }
            }
            if(substr($where,0,1) == '!'){
                if(substr($where,1) != $row[0]){
                    $output[$index]=$row;
                    $index++;
                }
            }
        }
    }
    return($output);
}

function altsql_insert($table,$values,$con){
    $write=fopen($con.$table.'.txt','a');
    foreach($values as $value){
        fwrite($write,$value.'~');
    }
    fwrite($write,'*');
    fclose($write);
}

function altsql_delete($table,$where,$con){
    $raw=file($con.$table.'.txt');
    $read=$raw[0];
    $array=explode('*',$read);
    $index=0;
    $rewrite=array();
    foreach($array as $line){
        $row=explode('~',$line);
        if($where == '*'){}
        if(substr($where,0,1) == '='){
            if(substr($where,1) != $row[0]){
                $rewrite[$index]=$row;
                $index++;
            }
        }
        if(substr($where,0,1) == '!'){
            if(substr($where,1) == $row[0]){
                $rewrite[$index]=$row;
                $index++;
            }
        }
    }
    $newfile=fopen($con.$table.'.txt','w');
    foreach($rewrite as $line){
        if($line[0] != ''){
            foreach($line as $row){
                fwrite($newfile,$row.'~');
            }
            fwrite($newfile,'*');
        }
    }
    fclose($newfile);
}
?>