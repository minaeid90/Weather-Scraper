<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="view-port" content="width=device-width" initial-scale="1.0"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<title>WeatherToday</title>

	<style type="text/css">

	html, body {
		height: 100%;
	}
	.container-fluid {
		background-image: url("images/background.jpg");
		background-size: cover;
		background-position: center;
		width: 100%;
		height: 100%;
		padding-top: 150px;

	}
	.center {
		text-align: center;
	}
	.white {
		color: white;
	}
	p {
		padding-top: 15px;
		padding-bottom: 15px;
	}

	</style>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center white">Weather Predictor</h1>
				<p class="lead center white">Enter your city to get forecast for the weather. </p>
				<form action="POST">
					<div class="form-group ">
						<input type="text" class="form-control" name="city" id="city" 
						placeholder="Eg. Alexandria, Cairo, Al Mansurah ...">
					</div>
					<input class="btn btn-success" type="submit" value="Find Weather">

					
				</form>

			</div>
		</div>
	</div>	


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</html>