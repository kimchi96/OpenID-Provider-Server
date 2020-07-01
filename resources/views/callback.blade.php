<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB DEMO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/style1.css" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<link rel="stylesheet" href="../css/lightbox.css">
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
                    <form action="#" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <ul>
                        <li><a href="{{URL::route('userinfo')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Thông tin người dùng<span id="user_name"></span></a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="search">
                        <form action="#" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#" class="scroll">Services</a></li>
                            <li><a href="#" class="scroll">Gallery</a></li>
                            <li><a href="#" class="scroll">News</a></li>
                            <li><a href="#" class="scroll">About</a></li>
                            <li><a href="#" class="scroll">Contact Us</a></li>
                        </ul>   
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
                    <h2>WELCOME WEB DEMO</h2>
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
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>
<SCRIPT LANGUAGE="JavaScript">
    $(document).ready(function(){
        confirmAction()
    })
    function confirmAction() {
        var search = window.location.search.split('&')  
        var code = search[0].split('=').pop()
        var state = search[1].split('=').pop()
        var redirect_uri = window.location.protocol + "//" + window.location.hostname + ':' + window.location.port + window.location.pathname;
        var authorization = window.btoa('981368:223556');
        
        if(localStorage.getItem('X_TOKEN') === null){
            $.ajax({
                type:'post',
                url:'/token',
                headers: {
                    'Authorization': 'Basic ' + authorization 
                },
                data: {
                    code,
                    state,
                    grant_type:"authorization_code",
                    redirect_uri
                },
                success:function(data){
                    localStorage.setItem('X_TOKEN', JSON.stringify(data));
                    getUserInfo();
                 }
           });
        }
    }

    function getUserInfo(){
            var X_TOKEN = localStorage.getItem('X_TOKEN');

            if(X_TOKEN !== null){

                X_TOKEN = JSON.parse(X_TOKEN);

                $.ajax({
                type:'get',
                url:'/userinfo',
                headers: {
                    'Authorization': 'Bearer ' +  X_TOKEN['access_token']
                },
                success:function(data){
                    localStorage.setItem('X_INFO', JSON.stringify(data));
                    //get query selector ajax id html append html
                },
                error: function(error){
                    if(error.status == 401){
                        localStorage.removeItem('X_TOKEN');
                        // tra ve trang bao loi
                    }
                }

           });
            }
            
    }
</SCRIPT>
</html>
