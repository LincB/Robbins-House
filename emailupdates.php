<?php
$data = file("dailyupdates.txt");
if(trim($data[0])!=date('n/j/y')){
    $files = array();
    if(trim($data[1]) != ''){
        for($index=1;$index<count($data);$index++){
            $line=trim($data[$index]);
            if(array_key_exists($line, $files)){
                $files[$line]++;
            }else{
                $files[$line]=1;
            }
        }
        $to = 'rmorrison@fenn.org, lincb123@gmail.com';
        $subject = 'Robbins House edits for '.trim($data[0]);
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Robbins House Notifier <notifier@robbinshouse.hostoi.com>' . "\r\n";
        $message = '<html><head>
            <title>Robbins House edits for '.trim($data[0]).'</title>
            </head><body>';
        foreach($files as $nameaction => $times){
            $name = substr($nameaction,0,strrpos($nameaction,' '));
            $action = substr(strrchr($nameaction,' '),1);
            
            $message .= '<a href="http://robbinshouse.hostoi.com/edit_person.php?person='.str_replace(' ', '_', $name).'">'.$name.'</a> '.$action;
            if($times != 1){
                $message .= ' ('.$times.' times)';
            }
            $message .= '<br/>';
        }
        mail($to, $subject, $message, $headers);
    }
    $file = fopen('dailyupdates.txt','w');
    fwrite($file,date('n/j/y').PHP_EOL);
    fclose($file);
}
?>
