<?php
include "config.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Event Management</title>

	<!-- CSS includes -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://www.shieldui.com/shared/components/latest/css/light/all.min.css" rel="stylesheet" />
    <link href="css/theme.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" title="event management">
                <img class="img-responsive" src="images/1logo.png" alt="event logo " />
            </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#about" class="smooth-scroll">About</a></li>
				<li><a href="#types" class="smooth-scroll">types</a></li>
				<li><a href="#Latest-events" class="smooth-scroll">Latest events</a></li>				
				<li><a href="#gallery" class="smooth-scroll">Gallery</a></li>
				<li><a href="#news" class="smooth-scroll">News &amp; Events</a></li>
				<li><a href="logout.php" class="smooth-scroll">Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- Carousel -->	
<div id="theme-carousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#theme-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#theme-carousel" data-slide-to="1"></li>
		<li data-target="#theme-carousel" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="images/e11.jpg" alt="carousel1" style="width:100%" />
			<div class="carousel-caption">
				<h2>"People make events into stories. Stories give events meaning"</h2>
				
			</div>
		</div>
		<div class="item">
			<img src="images/1.jpg" alt="carousel2" style="width:100%" />
			<div class="carousel-caption">
				<h2>All contents of meaning are absorbed in the only dominant form of the medium. Only the medium can make an event.</h2>
				
			</div>
		</div>
		<div class="item">
			<img src="images/7.jpg" alt="carousel3" style="width:100%">
			<div class="carousel-caption">
				<h2>Life's full of events - they occur and you adjust, you roll and move on</h2>
				
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#theme-carousel" role="button" data-slide="prev">
        <div class="carousel-control-arrow" style="margin-top:370px">&#8249;</div>
	</a>
	<a class="right carousel-control" href="#theme-carousel" role="button" data-slide="next">
        <div class="carousel-control-arrow" style="margin-top:370px">&#8250;</div>
	</a>
</div>

<div class="container-types">
    <div class="container">
        <div class="page-header" id="types">
            <h1 class="text-center text-danger">The student's Opinion</h1>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <p>"Fest By Type"</p>
                <br />
				<p><a href="#"><img src="images/types.jpg" style="border-radius:50%; width:180px; height:180px;;" /></a></p>
                <br />
				
            </div>
            <div class="col-md-4 text-center">
                <p>"Fest By College"</p>
                <br />
				<p><a href="#"><img src="images/college.png" style="border-radius:50%; width:180px; height:180px;" /></a></p>
                <br />
				
            </div>
            <div class="col-md-4 text-center">
                <p>"Fest By Department"</p>
                <br />
				<p><a href="#"><img src="images/depart.png" class="img-responsive" style="border-radius:50%; width:180px; height:180px;" /></a></p>
                <br />
				
            </div>
        </div>
    </div>
</div>

<div class="container-about">
    <div class="container">
        <div class="page-header" id="about">
            <h1 class="text-center text-default">About us</h1>
			<br><br>
			<p> Event schedular	marks days of absolute ecstasy, providing the budding artists a competing platform in diverse fields such as music,
			dance, theater, photography, literature, fine arts, quizzing and debating. Event Schedular is an avenue to be comforted from 
			the routine life and to embrace the fun and frolic embedded with tantalizing professional performances from Delhi along
			with an addressal to the social responsibility with its underlying social theme.
			</p>
        </div>
	
    </div>
</div>

<div class="container-Latest-events">
	<div class="clearfix hidden-xs" style="width:100%; height:10px;"></div>
	<div class="container">
		<div class="page-header" id="Latest-events">
			<h1 class="text-center text-danger">Latest Events</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="images/event2.jpg" class="img-responsive" />
						m dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="images/event 1.jpg" class="img-responsive" />
						<h4 class="text-danger">Dishes name</h4>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="images/event5.jpg" class="img-responsive" />
						<h4 class="text-danger">Dishes name</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur ex ea commodo.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="images/event 3.jpg" class="img-responsive" />
						<h4 class="text-danger">Dishes name</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur ex ea commodo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix hidden-xs" style="width:100%; height:50px;"></div>
</div>



<div class="container-gallery">
    <div class="container">
        <div class="page-header" id="gallery">
            <h1 class="text-center text-default">Gallery</h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list-unstyled text-center">
					<li class="filter btn btn-success" data-filter=".cultural">cultural</li>
                    <li class="filter btn btn-success" data-filter=".sports">sports</li>
                    <li class="filter btn btn-success" data-filter=".food-festival">food festival</li>
                    <li class="filter btn btn-success" data-filter=".star-night">star night</li>
					<li class="filter btn btn-success" data-filter="all">All</li>
                </ul>
            </div>
            <div class="mix cultural col-md-4">
                <a href="images/gallery/c1.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/c1.jpg" />
                </a>
            </div>
            <div class="mix cultural col-md-4">
                <a href="images/gallery/c2.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/c2.jpg" />
                </a>
            </div>
            <div class="mix cultural col-md-4">
                <a href="images/gallery/c3.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/c3.jpg" />
                </a>
            </div>
            <div class="mix cultural col-md-4">
                <a href="images/gallery/c4.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/c4.jpg" />
                </a>
            </div>
            <div class="mix sports col-md-4">
                <a href="images/gallery/sp1.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/sp1.jpg" />
                </a>
            </div>
            <div class="mix sports col-md-4">
                <a href="images/gallery/sp2.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/sp2.jpg" />
                </a>
            </div>
			<div class="mix sports col-md-4">
                <a href="images/gallery/sp3.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/sp3.jpg" />
                </a>
            </div>
			<div class="mix sports col-md-4">
                <a href="images/gallery/sp5.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/sp5.jpg" />
                </a>
            </div>
            <div class="mix food-festival col-md-4">
                <a href="images/gallery/f1.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/f1.jpg" />
                </a>
            </div>
            <div class="mix food-festival col-md-4">
                <a href="images/gallery/f2.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/f2.jpg" />
                </a>
            </div>
            <div class="mix food-festival col-md-4">
                <a href="images/gallery/f3.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/f3.jpg" />
                </a>
            </div>
			<div class="mix food-festival col-md-4">
                <a href="images/gallery/f4.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/f4.jpg" />
                </a>
            </div>
			<div class="mix star-night col-md-4">
                <a href="images/gallery/s1.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/s1.jpg" />
                </a>
            </div>
			<div class="mix star-night col-md-4">
                <a href="images/gallery/s2.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/s2.jpg" />
                </a>
            </div>
			<div class="mix star-night col-md-4">
                <a href="images/gallery/s3.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/s3.jpg" />
                </a>
            </div>
			<div class="mix star-night col-md-4">
                <a href="images/gallery/s4.jpg" class="img-wrapper">
                    <img class="img-responsive" src="images/gallery/s4.jpg" />
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:50px;"></div>
</div>

<div class="container-news">
    <div class="container">
        <div class="page-header" id="news">
            <h1 class="text-center text-danger">News &amp; Events</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-2 text-center">
					<p class="">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					</p>
				</div>
				<div class="col-md-10 text-justify">
					<h3>Echiesta</h3>
					<p>Saturday, 19th November</p><br />
					<p>Echlon Institute of Technology , Faridabad</p><br>
					<p>“Echiesta” is the annual techno-cultural fest of Echlon institute which is the 
					real accumulation of the plethora of events where every talent is appreciated 
					and brought to the glory. This year’s theme “RIVIERA” signifies the indomitable 
					spirit to re-live the past, celebrate the present and wholeheartedly welcome the 
					promising future.</p>
				</div>
				<div class="col-md-2 text-center">
					<p class="">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					</p>
				</div>
				<div class="col-md-10 text-justify">
					<h3>Hindi Conversation Hour </h3>
					<p>Saturday,19th November </p><br />
					<p>Zabaan Language Of Institue</p><br>
					<p>Come meet other Hindi learners living in Delhi as well as our teachers who will be
					on hand to facilitate conversation and make you feel at ease as you practice your #बातचीत.

					What better opportunity to practice your Hindi than in a fun and judgement-free environment!</p>
				</div>
                <div class="col-md-2 text-center">
					<p class="">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					</p>
				</div>
				<div class="col-md-10 text-justify">
					<h3>National Seminar on Emergence of Internet of Things (IoT)</h3>
					<p>Sunday, 19th November</p><br />
					<p>IMS Ghaziabad</p><br>
					<p>IMS Ghaziabad, under the stewardship of Prof. J.P. Sharma, Director IMS Ghaziabad, is organising
					a National Seminar on “Emergence of Internet of Things (IoT): Trends & Challenges”, on November 19, 2016.
					The event will be graced by Prof. Vinay Kumar Pathak, Hon'ble Vice Chancellor - Dr. A.P.J Abdul Kalam
					Technical University, Lucknow, as the Chief Guest of the seminar, along with renowned Industry experts
					- Mr Satya N. Gupta, Country Managing Director, BlueTown & Ex-Principal Advisor, TRAI, Mr. Ajay Ohri,
					Data Scientist & Founder - Decisionstats.com, and Mr. Pankaj Mongia, Senior Project Manager, Wipro Ltd.</p>
				</div>
            </div>
            <div class="col-md-4 text-center">
                <h3>Events</h3>
                <div id="calendar" class="calendar"></div>
                <br /><br />
                
            </div>
        </div>
    </div>
</div>

<div class="container-login">
    <div class="container">
        <div class="row">
			<div class="col-md-8">
                <form action="register.php" method="POST">
                    <div class="row">
                        <div class="page-header" id="login">
                            <h1 class="text-center text-default">Login</h1>
                        </div>
						<center>
							<div class="col-md-6">
								
								<div class="form-group">
									<input name="username" placeholder="Username" />
								</div>
								<div class="form-group">
									<input name="email" placeholder="E-Mail" />
								</div>
								<div class="form-group">
									<input name="pass" type="password" placeholder="Password" />
								</div>
								<div class="form-group">
									<input name="retyped_password" type="password" placeholder="Retype Password" />
								</div>
								<div class="form-group">
									<input name="name" placeholder="Name" />
								</div>
							</div>
						</center>
                        <div class="col-md-12 text-center">      
                            <button name="submit" class="btn btn-info">Register</button>
                        </div>
                    </div>
                </form>
            </div>
			<div class="col-md-4">
                <div class="page-header" id="login">
                    <h1 class="text-center text-default">Location</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="googlemap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  if(isset($_POST['submit']) ){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $retyped_password = $_POST['retyped_password'];
    $name = $_POST['name'];
    if( $username == "" || $email == "" || $password == '' || $retyped_password == '' || $name == '' ){
        echo "<h2>Fields Left Blank</h2>", "<p>Some Fields were left blank. Please fill up all fields.</p>";
    }elseif( !\Fr\LS::validEmail($email) ){
        echo "<h2>E-Mail Is Not Valid</h2>", "<p>The E-Mail you gave is not valid</p>";
    }elseif( !ctype_alnum($username) ){
        echo "<h2>Invalid Username</h2>", "<p>The Username is not valid. Only ALPHANUMERIC characters are allowed and shouldn't exceed 10 characters.</p>";
    }elseif($password != $retyped_password){
        echo "<h2>Passwords Don't Match</h2>", "<p>The Passwords you entered didn't match</p>";
    }else{
      $createAccount = \Fr\LS::register($username, $password,
        array(
          "email" => $email,
          "name" => $name,
          "created" => date("Y-m-d H:i:s") // Just for testing
        )
      );
      if($createAccount === "exists"){
        echo "<label>User Exists.</label>";
      }elseif($createAccount === true){
        echo "<label>Success. Created account. <a href='login.php'>Log In</a></label>";
      }
    }
  }
 ?>
<footer id="subfooter" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-thumbs-o-up text-danger"></span> VISIT US</p>
                <p>We are driven by uncompromising freshness and quality, gracious hospitality and a growing list of dishes</p>
            </div>
            <div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-clock-o text-danger"></span> OPEN HOURS</p>
                <p>Mondays : Closed</p>
				<p>Tue-Fri : 0am - 12am</p>
                <p>Sat-Sun : 7am - 1am</p>
            </div>
			<div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-map-marker text-danger"></span> CONTACTS</p>
                <p>54, North Road, PA 45086, USA</p>
                <p>+1 888 455 6677</p>
                <p><a href="mailto:mail@example.com">mail@example.com</a></p>
            </div>
            <div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-envelope-o text-danger"></span> NEWSLETTER</p>
                <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your email..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </span>
                    </div>
                </p>
                <p><br /></p>
                <p>
                    <a class="fa fa-twitter footer-socialicon" target="_blank" href="https://twitter.com/"></a>
                    <a class="fa fa-facebook footer-socialicon" target="_blank" href="https://www.facebook.com/"></a>
                    <a class="fa fa-google-plus footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                    <a class="fa fa-linkedin footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                </p>
            </div>
        </div>
    </div>
</footer>

<footer id="footer" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
            </div>
            
        </div>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<link href="css/magnific-popup.css" rel="stylesheet">
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/theme.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        // Mix It Up Gallery and Magnific Popup setup
        $('.container-gallery').mixItUp({
			load: {
				filter: '.dishes'
			}
		});
        $('.container-gallery').magnificPopup({
            delegate: 'a',
            type: 'image'
        });

        // ShieldUI Calendar setup
        $("#calendar").shieldCalendar({
            footer: {
                enabled: true,
                footerTemlpate: "{0:dd.MM.yy}"

            },
            min: new Date("2009/2/23"),
            max: new Date("2039/3/1"),
            value: new Date()
        });

        // ShieldUI QRCode setup
        $("#qrcode").shieldQRcode({
            mode: "byte",
            size: 150,
            value: "https://demos.shieldui.com",
            style: {
                color: "#ed1b24"
            }
        });

        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>

</body>
</html>
	
