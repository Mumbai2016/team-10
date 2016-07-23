<?php
// the message
function mail($name,$sub,$msg)
{
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
// send email
  mail($name,$sub,$msg);
}
?> 
