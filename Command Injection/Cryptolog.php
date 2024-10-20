<?php
include("config.php");
require_once("kontrol.php");
$opt=$_POST['opt'];
$lsid=$_POST['lsid'];
$sharetype=$_POST['lssharetype'];
$remoteaddress=$_POST['lsremoteaddress'];
$sharefolder=$_POST['lssharefolder'];
$user=$_POST['lsuser'];
$pass=$_POST['lspass'];
$domain=$_POST['lsdomain'];
$dbConn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
if (!$dbConn) die ("Out of service");
mysql_select_db(DB_DATABASE, $dbConn) or die ("Out of service");
include("classes/logshares_class.php");
if($opt=='del')
{
  cLogshares::fDeleteFileshareDB($dbConn,$lsid);
}
else if($opt=='add')
{
  cLogshares::fAddFileshareDB($dbConn,$sharetype,$remoteaddress,$sharefolder,$user,$pass,$domain);
}
else if($opt=='check')
{
  echo cLogshares::fTestFileshare("/mnt/logsource_".$lsid."_".$sharetype);
}
else if($opt=='mount')
{
  cLogshares::fMountFileshareOnly($dbConn,$lsid,$sharetype);
  echo cLogshares::fTestFileshare("/mnt/logsource_".$lsid."_".$sharetype);
}

function fTestFileshare($sharefolder)
{
  $output = shell_exec('sudo /opt/cryptolog/scripts/testmountpoint.sh '.$sharefolder);
  return trim($output);
}
?>


//Final : 
1.IDOR Attack 
2.SQL Injection Attack .
3.Command Execution 
Use of escapeshellarg() can prevent it. 
4.Not Encryption or Hashing is used to store the passwords. 
Consider using secure password hashing (e.g., password_hash() and password_verify()) instead of handling plaintext passwords.
5.No Input Sanitization will lead to XSS issue .
htmlspecialchars() can be used to stop XSS . 
