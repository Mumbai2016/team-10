<?php
    include('way2sms-api.php');
    function msg($num,$msg)
    {
    sendWay2SMS ( '9920178153' , '5322' , $num , $msg);   
  }
     
?>
