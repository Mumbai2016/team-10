<?php

        include('config.php');	
       //$temp=$_POST['s1'];
		$temp="Miyapur";
		//$var=$_POST["submit"];
	    $temp1=0;
        $q1="SELECT * FROM station WHERE station='$temp'";
		$fetch1=mysql_query($q1,$sConn);
		$row = mysql_fetch_array($fetch1);
		$c1=$row['Code'];
		//$temp=$_POST['s2'];
		$temp="Parade Grounds";
		$q2="SELECT * FROM station WHERE station='$temp'";
		$fetch2=mysql_query($q2,$sConn);
		$row = mysql_fetch_array($fetch2);
		
	
		$c2=$row['Code'];
		$A=substr($c1,0,1);
     	$B=substr($c2,0,1); 
        
      
        
        if($A==$B){
            if($A=='A')
             $ans=line1(substr($c1,1),substr($c2,1));
            else if($A=='B')
           $ans=line2(substr($c1,1),substr($c2,1));
            else if($A=='C')
            $ans=line3(substr($c1,1),substr($c2,1));
		
          else
            {
                if(substr($c1,1)=="2" && substr($c2,1)=="1" || substr($c1,1)=="1" && substr($c2,1)=="2")
            $ans=line1(11,20);
               else if(substr($c1,1)=="2" && substr($c2,1)=="3" || substr($c1,1)=="1" && substr($c2,1)=="2")
            $ans=line2(2,10);
                else
                   $ans=line3(14,9);
                   
            }
          
            
         }
	

       else if($A!=$B){
            if($A=='A' && $B=='X')
            { if(substr($c2,1)=="1")
             $ans=line1(substring($c1,1),11);
            
            else if(substr($c2,1)=="2")
             $ans=line1(substr($c1,1),20);
            
            else
            {
               // echo "<br>via X1(Ameerpet) or X2(MGBS sttation) enter the code<br>";
                //input has to be taken here, variable I
				
              $temp1=1;
            }
        }
            //
            else if($A=='X' && $B=='A')
            { 
		        if(substr($c1,1)=="1")
             $ans=line1(11,substr($c2,1));
            
            else if(substr($c1,1)=="2")
             $ans=line1(20,substr($c2,1));
            
            else
            {
				
                //echo "via X1(Ameerpet) or X2(MGBS sttation) enter the code";
                //String I=s.nextLine();
				// take input here
				$temp1=1;
     
            }
        }
            
            ////////////////////////////
            
            else if($A=='X' && $B=='B')
            { if(substr($c1,1)=="3")
             $ans=line2(2,substr($c2,1));
            
            else if(substr($c1,1)=="2")
             $ans=line2(10,substr($c2,1));
            
            else
            {
                //echo "via X3(Parade ground station) or X2(MGBS sttation) enter the code";
                // input here
              $temp1=1;
            }
        }
            //
            else if($A=='B' && $B=='X')
            { 
		     if(substr($c2,1)=="3")
             $ans=line2(2,substr($c1,1));
            
            else if(substr($c2,1)==("2"))
             $ans=line2(10,substr($c1,1));
            
            else
            {
               // echo "via X3(Parade ground station) or X2(MGBS sttation) enter the code";
                // take the input here , variable I
             $temp1=1;
            }
        }
            
            //////////////////////////////////////////////////////////////////
            else if($A=='C' && $B=='X')
            { if(substr($c2,1)=="1")
             $ans=line3(substr($c1,1),14);
            
            else if(substr($c2,1)=="3")
             $ans=line3(substr($c1,1),9);
            
            else
            {
                //echo "via X1(Ameerpet) or X3(Parade ground station) enter the code";
                //String I=s.nextLine();
				// take the input here, variable I
         $temp1=1;
            }
        }
            ///////////////////////////
         else if($A=='X' && $B=='C')
            { if(substr($c1,1)=="1")
             $ans=line3(substr($c2,1),14);
            
            else if(substr($c1,1)=="3")
             $ans=line3(substr($c2,1),9);
            
            else
            {
                //echo "via X1(Ameerpet) or X3(Parade ground station) enter the code";
                //String I=s.nextLine();
				//take input here
              $temp1=1;
            }
        }
       ////////////////////////////////////////
         else if($A=='A' && $B=='B')
            { 
           
               
            
				   $ans=line12((abs(substr($c1,1)-20)),(abs(substr($c2,1)-10)));
                
                
            }
        
       ////////////////////////////////////
       else if($A=='B' && $B=='A')
            { 
           
               
                   $ans=line2(substr($c1,1),10); 
                   $ans1=line1(20,substr($c2,1));
                   $ans=$ans+$ans1;
				    $ans=line21((abs(substr($c2,1)-20)),(abs(substr($c1,1)-10)));
                
                
            }
            ///////////////////////
               else if($A=='B' && $B=='C')
            { 
           
               
           
                
                 $ans=line23((abs(substr($c1,1)-2)),(abs(substr($c2,1)-9)));
            }
            //////////////////////
               else if($A=='C' && $B=='B')
            { 
           
               

				    $ans=line32((abs(substr($c1,1)-9)),(abs(substr($c2,1)-2)));
                
                
            }
            ///////////////////////////////
          else if($A=='A' && $B=='C')
            { 
           
               
          
				    $ans=line13((abs(substr($c1,1)-11)),(abs(substr($c2,1)-14)));
                
                
            }
/////////////////////////////////////
          else if($A=='C' && $B=='A')
            { 
           
               
     
				    $ans=line31((abs(substr($c1,1)-14)),(abs(substr($c2,1)-11)));
                
                
            }
       }
       
       //echo "The cost of the ticket is Rs.".$ans;
   
		
    
    function line1($x,$y){
		$ans=10;
        
      if ((abs($x-$y)>3))
        {
          $ans=$ans+(abs($x-$y)-3)*2.5;
          
        }
        
        return $ans;
    }
    
    function line2($x,$y){
      
       $ans=10;
         if (!(abs($x-$y)<=3))
        {
          $ans=$ans+(abs($x-$y)-3)*2.0;  
        }
        
        return $ans;
    }
    
   function line3($x,$y){

        $ans=10;
        if (!(abs($x-$y)<=3))
        {
          $ans=$ans+(abs($x-$y)-3)*3.0;  
        }
        return $ans;
    }
	
	function line12($x,$y)
	{
		$ans=10;
		if($x<=3)
		{
			if($x+$y<=3)
				return 10;
			else
				$ans=$ans+($x+$y-3)*2;
		}
		else
		{
			$ans=$ans+($x-3)*2.5+ $y*2;
		}
		return $ans;
	}
		function line21($x,$y)
	{
		$ans=10;
		if($x<=3)
		{
			if($x+$y<=3)
				return 10;
			else
				$ans=$ans+($x+$y-3)*2.5;
		}
		else
		{
			$ans=$ans+($x-3)*2+ $y*2.5;
		}
		return $ans;
	}
		function line13($x,$y)
	{
		$ans=10;
		if($x<=3)
		{
			if($x+$y<=3)
				return 10;
			else
				$ans=$ans+($x+$y-3)*3;
		}
		else
		{
			$ans=$ans+($x-3)*2.5+ $y*3;
		}
		return $ans;
	}
	function line31($x,$y)
	{
		$ans=10;
		if($x<=3)
		{
			if($x+$y<=3)
				return 10;
			else
				$ans=$ans+($x+$y-3)*2.5;
		}
		else
		{
			$ans=$ans+($x-3)*3+ $y*2.5;
		}
		return $ans;
	}
	function line23($x,$y)
	{
		$ans=10;
		if($x<=3)
		{
			if($x+$y<=3)
				return 10;
			else
				$ans=$ans+($x+$y-3)*3;
		}
		else
		{
			$ans=$ans+($x-3)*2+ $y*3;
		}
		return $ans;
	}
	function line32($x,$y)
	{
		$ans=10;
		if($x<=3)
		{
			if($x+$y<=3)
				return 10;
			else
				$ans=$ans+($x+$y-3)*2;
		}
		else
		{
			$ans=$ans+($x-3)*3+ $y*2;
		}
		return $ans;
	}
	$arr=array('check' => 1);

	echo json_encode($arr);
?>
