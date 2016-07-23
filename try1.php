<html>

<?php
include("connect.php");
//if (isset($_POST["submit"])
//{
    //$var=$_POST['viwew'];
    $sql="select * from pairtable";
    $res=mysqli_query($connect ,$sql);
    
      while($row = mysqli_fetch_array($res))
  {
 
     $r1=$row['mentor_id'];
     $r2=$row['mentee_id'];
     $s="select * from mentorinfo where mentor_id=$r1";
     $res = mysqli_query( $connect, $s );
     while($row = mysqli_fetch_array($res))
     {
     ?>
     <select>
  <option value="volvo"><?php echo $row["ment_fname"] ?>
  <option value="volvo"><?php echo $row["ment_lname"] ?>
        

</select> 
<?php
         
     }
     
      $s="select * from menteeinfo where menteeinfo_id=$r2";
     $res = mysqli_query( $connect, $s  );
     while($row = mysqli_fetch_array($res))
     {
         echo $row["firstname"];
         echo $row["lastname"];
     }
     

  }
//}

  
?>

</option>
</html>