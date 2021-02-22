<?php
require_once 'functions.inc.php';
function navigation() {
$page = basename($_SERVER['SCRIPT_NAME']);
    ?>
    <!-- Navigation -->
	
        <!-- Navigation -->
       <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #610B0B;" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php">UNI KASSEL: Eugenie NANA</a>
            </div>
            <!-- /.navbar-header -->
			
			
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-top-links navbar-right">
			        <li>
                        <a href="../semestre/index.php">Home </a>
                    </li>
                    <li>
                        <a href="#">Unternehmen</a>
                    </li>
                    <li>
                        <a href="#">Internationales</a>
                    </li>
					
				</ul>
    <?php
}

function head($title) {
    ?>
    <!DOCTYPE html>
	
		<head>
		
			<html lang="en">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<!-- Bootstrap Core CSS -->
			 <link href="../css/bootstrap.min.css" rel="stylesheet">

			<!-- MetisMenu CSS -->
			<link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

		   
			<!-- Custom CSS -->
			<link href="../css/sb-admin-2.css" rel="stylesheet">

			<!-- Morris Charts CSS -->
			<link href="../css/plugins/morris.css" rel="stylesheet">
			<!-- Custom Fonts -->
			<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			 <link href="../css/modern-business.css" rel="stylesheet">
			<!-- Custom CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
			<link rel="stylesheet" href="../css/bundle.min.css">
			<link rel="stylesheet" href="../css/vertical.news.slider.css?v=1.0">
			<link href="../css/style.css" rel="stylesheet">
			<title><?= $title ?> :: UNI Kassel</title>

		</head>

		
        <body>
       <div id="wrapper">
    <?php 
		navigation() ?>
            <!-- Page Content -->
		     
        <?php
        }
		?>
		 
        <!-- /#page-wrapper -->

    
    <!-- /#wrapper -->
	<?php
        function foot() {
           ?>
                <!-- jQuery -->
     <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
	<script type="text/javascript" src="../js/carousel.min.js"></script>
	 <script src="../js/vertical.news.slider.min.js"></script>
    <!-- Script to Activate the Carousel -->
	<script src="../js/calendar.js"></script>
	<script src="../js/index.js"></script>
 
	
    <script>
	
	$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});

$(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        }); 
    });


<!-- Slide de la page principale -->

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
	

	

    </script>
        </body>
    </html>
    <?php
}
?>