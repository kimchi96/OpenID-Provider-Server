<!DOCTYPE html>
<html lang="en">

<head>
<title>WEB DEMO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/font-awesome.css"> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
	<!-- main -->
	<div class="main-agileits">
		<div class="contact-w3left"></div>
		<div class="mainw3-agileinfo form">
			<h1>ERROR</h1> 
			<div class="contact-grid agileits"> 
				<form action="" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}"/> 
					<div class="">
						<a href="{{URL::route('rp')}}"><input type="submit" value="Comeback Web Demo">
					</div>
				</form> 
			</div>
		</div>	
	</div>	
	<!-- //main --> 
</body>
</html>
