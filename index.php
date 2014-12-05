<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOLARE</title>

    <!-- Bootstrap -->
	<link href="css/datepicker.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/personal.css">
  </head>
  <body>
  <div class="container main-content">
		<div class="row">
			<div class="col-md-12">
				<a href="#"><img class="head-image" src="img/head.jpg" alt="hd"></a>
			</div>
		</div>
	       <div class="row">
				<div class="col-md-3">
					<div class="edu-background">
						<div class="align-center">
							<span style="display: block !important; width: 280px; text-align: center; font-family: sans-serif; font-size: 12px;"><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:66502.1.99999&bannertypeclick=wu_travel_runway1" title="Manhattan, Kansas Weather Forecast" target="_blank"><img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_travel_runway1&airportcode=KMHK&ForcedCity=Manhattan&ForcedState=KS&zip=66502&language=EN" alt="Find more about Weather in Manhattan, KS" width="160" /></a><br><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:66502.1.99999&bannertypeclick=wu_travel_runway1" title="Get latest Weather Forecast updates" style="font-family: sans-serif; font-size: 12px" target="_blank"></a></span>
						</div>
					</div>
				</div>
		  <div class="row col-md-9" style="background-image:url('img/av.jpg');">
			<div class="col-lg-5 form-padding"> <!-- Start first column -->
				<h5><span class="label label-info ">From:</span></h5>
				<div class="input-group" style="padding-right:10px"> <!--Country form -->
					<input type="text" class="form-control" placeholder="Country">
					<span class="input-group-addon glyphicon glyphicon-globe"></span>
				</div> <!-- End Country form -->
			
				<div class="input-group form-padding"> <!--City form -->
					<input type="text" class="form-control" placeholder="City">
					<span class="input-group-addon glyphicon glyphicon-screenshot"></span>
				</div><!-- End City form -->
			
				<div class="input-group form-padding2"> <!--Airport Form -->
					<input type="text" class="form-control" placeholder="Airport">
					<span class="input-group-addon"></span>
					<input type="text" class="form-control" placeholder="Code">
					<span class="input-group-addon glyphicon glyphicon-plane"></span>
				</div><!--End Airport form -->
			
					<div class="input-group"><!--Start Date form-->
						<input type="text" class="form-control datepicker" placeholder="Departing Date">
						<span class="input-group-btn">
						<button class="btn btn-default glyphicon glyphicon-calendar"></button>
						</span>
				</div> <!--End Date form-->
			</div> <!--Close First Column -->
		   
				<!-- Start Arrival column -->
		  
				<div class="col-lg-5 form-padding"> 
					<h5><span class="label label-info">To:</span></h5>
					<div class="input-group" style="padding-right:10px"> <!--Country form -->
					<input type="text" class="form-control" placeholder="Country">
					<span class="input-group-addon glyphicon glyphicon-globe"></span>
					</div> <!-- End Country form -->
			
				<div class="input-group form-padding"> <!--City form -->
					<input type="text" class="form-control" placeholder="City">
					<span class="input-group-addon glyphicon glyphicon-screenshot"></span>
				</div><!-- End City form -->
			
				<div class="input-group form-padding2"> <!--Airport Form -->
					<input type="text" class="form-control" placeholder="Airport">
					<span class="input-group-addon"></span>
					<input type="text" class="form-control" placeholder="Code">
					<span class="input-group-addon glyphicon glyphicon-plane"></span>
				</div><!--End Airport form -->
			
		   </div> <!--Close Arrival Column-->
		   
		</div>
		
  
  
  
  
  
  
   </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	 $(function(){
	  $('.datepicker').datepicker();
	  });
	</script>
  </body>
</html>