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
                        <li>
                            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>username</a></li>
                        </li>
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
        <!-- banner-info -->
        <div class="banner-info">
            <div class="container">
                <div class="form-info">
                    <div class="form-header">
                        <h3>User Info</h3>
                        <ul class="u-info">
                            <li>
                                <ul class="info-text">
                                    <li class="info-text-left"><b>Name</b></li>
                                    <li><span>:</span>21-08-1987</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="info-text">
                                    <li class="info-text-left"><b>PHONE</b></li>
                                    <li><span>:</span>(+000) 003 003 0052</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="info-text">
                                    <li class="info-text-left"><b>ADDRESS</b></li>
                                    <li><span>:</span>3030 New York, NY, USA</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="info-text">
                                    <li class="info-text-left"><b>E-MAIL</b></li>
                                    <li><span>:</span><a href="mailto:example@mail.com"> info@example.com</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>   
                </div>
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
                <p>DEMO OPENID CONNECT: TRÌNH KIM CHI <a href="#">HOME</a></p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <script src="../js/jarallax.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script src="../js/responsiveslides.min.js"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {                 
            $().UItoTop({ easingType: 'easeOutQuart' });                  
            });
    </script>
<!-- //here ends scrolling icon -->
</body>
<script src="../js/jwt-decode.js"></script>
<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
        var search = window.location.search.split('&')  
        var code = search[0].split('=').pop()
        var state = search[1].split('=').pop()
        var redirect_uri = window.location.protocol + "//" + window.location.hostname + ':' + window.location.port + window.location.pathname;
        var access_token = window.btoa('NpuYUFhsCh');
            $.ajax({
            type:'get',
            url:'./userinfo',
            headers: {
                'authorization': 'Bearer ' + access_token
            },
            data: {
                code,
                state,
                grant_type:"authorization_code",
                redirect_uri
            },
            success:function(data){
                window.opener.location.href = data
            }
        });
     
    }
</SCRIPT> 
</html>