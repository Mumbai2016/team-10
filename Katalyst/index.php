<?php
include "config.php";
?>
<!DOCTYPE html>

<!-- 
Template Name: Ticketing Application
Version: 1.1
Author: Nirbhay P and Harsh G
Website: bit.ly/metrohyd
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->



<head>
    <meta charset="utf-8" />
    <title>Hyderabad Metro Ticketing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
   
    <!-- end theme style -->
    <!-- favicon links -->
     <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	 <link rel="stylesheet" type="text/css" href="css/js-image-slider.css"> 
	 <script src="js/js-image-slider.js" type="text/javascript"></script>
	  <link href="css/main.css" rel="stylesheet" type="text/css" />
	  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	 
</head>

<body>
    <!--Loader Start -->
    <div class="mj_preloaded">
        <div class="mj_preloader">
            <div class="lines">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>

            <div class="loading-text">LOADING</div>
        </div>
    </div>
    <!--Loader End -->

    <div class="mj_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="mj_logo">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mj_menu" aria-expanded="false"> <span class="sr-only">MENU</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="collapse navbar-collapse mj_navmenu" id="mj_menu">
                        <ul class="nav navbar-nav">
                             
							  <div id="sliderFrame">
        <div id="slider">
            
                
            </a>
			<img src="images/image-slider-1.jpg" />
            <img src="images/image-slider-2.jpg" />
            <img src="images/image-slider-3.jpg" alt="" />
            <img src="images/image-slider-4.jpg" alt="#htmlcaption" />
            <img src="images/image-slider-5.jpg" />
        </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>
	                            
                            <li class="active"><a href="#" align="center">Hyderabad Metro Station</a>
							

                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_mapmarker">
        <div id="map"> </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_top_searchbox">
                        <form method="post" action="index.php">
						
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                                                   <select name="source" autofocus>
<?php
								
									      $query = "SELECT * FROM station";
    $result = mysql_query($query);
    while($row=mysql_fetch_array($result)){                                                 
       echo "<option value='".$row['Station']."'>".$row['Station']."</option>";
    }
								  

?>
</select>
									
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                               <select name="dst" autofocus>
								  <?php
								
									      $query = "SELECT * FROM station";
    $result = mysql_query($query);
    while($row=mysql_fetch_array($result)){                                                 
       echo "<option value='".$row['Station']."'>".$row['Station']."</option>";
    }
									  
								  

?>
</select>
                            </div>
				
							

							
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							
								<select id="timepass" class="custom-select" style="visibility:hidden">
									<option>X1</option>
									<option>X2</option>
									<option>X3</option>
									
                                </select>

                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                               <input type="submit" class="mj_mainbtn mj_btnyellow" name="submit" data-text="search">
                            </div>
                        </form>
						<button id="Hello">
hello</button>
<script>
$(document).ready(function(){

$('#Hello').click(function(){
	
$.ajax({
        url: 'logic.php',
        type: 'POST',
		data: { s1: "adad"},
        datatype: 'json',
        success: function (result) {
			var x=JSON.parse(result);
		alert(x.check);

         
        },
        error: function () {
           alert("error");
        }
})
});	
});
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mj_filter_section">
        <div class="container">
            <div class="row">
               
                       
                <div class="mj_jobinfo">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="row">
            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                
                    </div>
                </div>
				<style>
				.ticket{
                   width: 25px;
					padding: 25px;
					border: 25px solid #d32026;
                   margin: 25px;
				   background-color:#C77566;
				   color:#ffffff;
				   font-weight:bold;
				   font-size:14px;
				   text-align:center;
}
				</style>
                <div class="mj_tabcontent mj_bottompadder80">
                   <table class="table table-striped">
                        <tr>
                       
               
               
                            <td class="ticket">
                                    <p color="blue">Your  <strong>Ticket</strong>
								for the journey between <strong><?php
								  if(isset($_POST['submit']))
								  {
								echo $_POST['source']; ?></strong> and <strong><?php echo $_POST['dst']; 
								  }
								?>
								</strong> is :
                                Rs. 
								<?php
								    include('logic1.php');									 
									 if(isset($_POST['submit']))
									 echo $ans;
								   
								?>
                            </p>
                            </td>
							
                        </tr>
                        
                       
                    </table>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
						
					</div>
                </div>
            </div>
        </div>
    </div>

	
    <div class="mj_footer mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_weight mj_bottompadder20">

                        <p></p>
                    </div>
             
                    <div class="mj_weight mj_bottompadder20">
                        <div class="mj_sociallink">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mj_copyright">
                        <p>&copy; 2016 <a href="#">Hyderabad<span class="mj_yellow_text">Metro</span></a>
                            <br> Designed by <a href="#">Harsh G and Nirbhay P</a> &nbsp; / &nbsp; <a href="#"></a>
                        </p>
                        <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> </div>
                </div>
                <div class="totop">
                    <div class="gototop">
                        <a href="#"> <i class="fa fa-angle-up"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<!-- Script Start -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/modernizr.custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/plugins/rsslider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/plugins/rsslider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
    <script src="js/plugins/owl/owl.carousel.js" type="text/javascript"></script>
    <script src="js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
    <script src="js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="js/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<script src="js/plugins/ckeditor/ckeditor.js"></script>
    <script src="js/plugins/isotop/isotope.pkgd.js"></script>
  <script src="js/plugins/ckeditor/ckeditor.js"></script>
    <script src="js/plugins/ckeditor/adapters/jquery.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEig36m6__p3-uEnaiyEwx7yiSp4jSJ_w&callback=displayRoute"
    async defer></script>
    <script type="text/javascript">
	
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
		}
		function displayRoute() {
   map=new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 10
        });
    
    var l1 = <?php echo json_encode($lat1); ?>;
	var l2 = <?php echo json_encode($lng1); ?>;
	//document.write(l1);
	var l3 = <?php echo json_encode($lat2); ?>;
	var l4 = <?php echo json_encode($lng2); ?>;

    var start = new google.maps.LatLng(l1, l2);
    var end = new google.maps.LatLng(l3, l4);

    var directionsDisplay = new google.maps.DirectionsRenderer();// also, constructor can get "DirectionsRendererOptions" object
    directionsDisplay.setMap(map); // map should be already initialized.
     
    var request = {
        origin : start,
        destination : end,
        travelMode : google.maps.TravelMode.DRIVING
    };
    var directionsService = new google.maps.DirectionsService(); 
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
}
      
    </script>
    <!-- Script End -->
</body>


<!-- Mirrored from rulercrm.com/mesh-update-latest/jobs.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 02 Apr 2016 11:19:19 GMT -->
</html>
