<?php
  function SendChatMsg($User, $input) {
    $u = $User;
    $in = $input;
    $file=fopen("chat/chat.txt", "a");
    fwrite($file, "<".date('h:m:sa mm/dd/yy')." ".$u.">: ".$in."\n");
    fclose($file);
  }
  function ReadChatMsg() {
    $file=fopen("chat\chat.txt", "r");
    $data=fread($file, filesize("chat\chat.txt"));
    fclose($file);
  }
  function isNewChat() {
    if(file_exists("chat\chat.txt")) {
      $file=fopen("chat\chat.txt", "w");
      fwrite($file, "Chat has been installed."."\n");
      fclose($file);
    } else {
      //Don't do nothing with this code. :(
    }
  }
  function checkifBanned() {
    $YOURIP=$_SERVER['REMOTE_ADDR'];
    $file=fopen("chat\ipbanned.txt", "r");
    $ipcheck=fread($file, filesize("chat\ipbanned.txt"));
    fclose($file);
    $check=array($ipcheck);
    for($i = 0; $i <= 999; $i = $i + 1) {
      if($YOURIP == $ipcheck[$i]) {
        die("You have been banned from chatting.");
      }
    }
  }
  function BanIP($IP) {
    $writeIP=$IP;
    $readips=fopen("chat\ipbanned.txt", "r");
    $ip=fread($readips, filesize("chat\ipbanned.txt"));
    fclose($readips);
    $file=fopen("chat\ipbanned.txt", "w")
    fwrite($file, $ip."'".$writeIP."',");
    fclose($file);
  }
  function adminCheck() {
    $YOURIP=$_SERVER['REMOTE_ADDR'];
    $file=fopen("chat\admins.txt", "r");
    $ipread=fread($file, filesize("chat\admins.txt"));
    fclose($file);
    $check=array($ipcheck);
    for($i = 0; $i <= 999; $i = $i + 1) {
      if($YOURIP == $array[$i]) {
        $_GLOBAL['isADMIN'] = true;
      }
    }
  }
  function addAdmin($IP) {
    $writeIP=$IP;
    $readips=fopen("chat\admins.txt", "r");
    $ip=fread($readips, filesize("chat\admins.txt"))
    fclose($readips);
    $file=fopen("chat\admins.txt", "w");
    fwrite($file, $ip."'".$writeIP."',");
    fclose($file);
  }
?>
