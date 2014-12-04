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
    <script src="js/bootstrap-datepicker.js"></script>
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
		  <div class="row col-md-9">
        <div class='col-md-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" id="datetimepicker"></span>
                    </span>
                </div>
            </div>
		</div>
		</div>
		</div>
  
  
  
  
  
  
   </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/main.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker();
            });
        </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>