<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB DEMO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Social Login widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">

<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<div class="contact-w3left">  
		<div class="mainw3-agileinfo form">
			<h1>Login Form</h1> 
			<div class="contact-grid agileits"> 
				<form action="" method="get"> 
					<div class="w3ls-icon">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="Name" placeholder="Username" required="">
					</div>
					<div class="w3ls-icon">
						<i class="fa fa-unlock" aria-hidden="true"></i>
						<input type="password" name="password" placeholder="Password" required=""> 
					</div>
					<div class="">
						<input type="submit" value="Login">
					</div>
					<div class="social-wthree-icons bnragile-icons">
						<p>Or</p>
						<div class="">
							<button>Sign in with OpenID</button>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form> 
			</div>
		</div>	
	</div>	
	<!-- //main --> 
</body>
    <script>
        $('button').click(function(){
            loginCallback()
        })
        function loginCallback(){
			const parent = window.open('http://localhost:81/op.com/login?response_type=code&scope=openid&client_id=981368&state=367303&redirect_uri=http://localhost:81/rp.com/cb', "myWindow", "width=800, height=700"
            	)
            
        }
    </script>
</html>