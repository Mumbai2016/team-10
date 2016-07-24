<?php
   
    function msg($num,$msg)
    {
    include('way2sms-api.php');
    sendWay2SMS ( '9920178153' , '5322' , $num , $msg);   
  }
     
?>
