<?php

include('connect.php'); 
  
 $sql="SELECT * from menteeinfo WHERE menteeinfo_id not in (select mentee_id from pairtable)";

$res=mysqli_query($connect ,$sql);



  while($row = mysqli_fetch_array($res))
  {
 
echo $row['firstname'];

  }


  
?>