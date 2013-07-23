<?php
$password=$_GET['pass'] or '';
$ip=$_SERVER['REMOTE_ADDR'];
$readpass=file('password.txt');
$realpass=$readpass[0];
if($password != ''){
if($password == $realpass){
$exp=time()+3600;
$hash=md5($password.'random'.$ip.'stuff'.$exp);
setcookie('loginhash',$hash,$exp);
setcookie('exptime',$exp,$exp);
header('Location: http://robbinshouse.hostoi.com/edit.php');
exit;
}else{
header('Location: http://robbinshouse.hostoi.com/login.php?error=3');
exit;
}
}
if(isset($_COOKIE['loginhash']) && isset($_COOKIE['exptime'])){
$tohash=$realpass.'random'.$ip.'stuff'.$_COOKIE['exptime'];
if(md5($tohash) != $_COOKIE['loginhash'] && time() <= $_COOKIE['exptime']){
header('Location: http://robbinshouse.hostoi.com/login.php?error=2');
exit;
}else{
exit;
}
}else{
header('Location: http://robbinshouse.hostoi.com/login.php?error=1');
exit;
}
?>