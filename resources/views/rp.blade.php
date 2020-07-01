<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB DEMO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../css/style1.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<!-- light-box -->
<link rel="stylesheet" href="../css/lightbox.css">
<!-- //light-box -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

</head>
<body>
    <!-- banner -->
    <div class="banner">
        <div class="banner-dot">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <h1><a href="{{URL::route('rp')}}">KIM CHI<span>Demo</span></a></h1>
                </div>
                <div class="header-middle">
                    <ul>
                        <!-- <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li> -->
                        <li><a href="{{URL::route('rplogin')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="search">
                        <form action="#" method="post">
                            <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header-top -->
        <!--header-->
        <div class="header">
            <div class="container">     
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                        <div class="clearfix"> </div>   
                    </div>
                </nav>
            </div>
        </div>
        <!--//header-->
        <!-- banner-info -->
        <div class="banner-info">
            <div class="container">
                <div class="w3layouts-text">
                    <h2>WEB DEMO OPENID CONNECT</h2>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //banner-info -->
        </div>
    </div>
    <!-- //banner -->
   
    <!-- footer -->
    <div class="agileits-w3layouts-footer">
        <div class="container">
            <div class="agile-copyright">
                <p>DEMO OPENID CONNECT: TRÌNH KIM CHI <a href="{{URL::route('rp')}}">HOME</a></p>
            </div>
        </div>
    </div>
</body> 
</html>