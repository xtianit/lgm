
<?php
	require('welcome.inc');
	$name = 'Life Gate Ministries Worldwide';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
		.carousel.fade {
			opacity: 1;
		}
		.carousel.fade .item {
			transition: opacity ease-out .7s;
			left: 0;
			opacity: 0; /* hide all slides */
			top: 0;
			position: absolute;
			width: 100%;
			display: block;
		}
		.carousel.fade .item:first-child {
			top: auto;
			opacity: 1; /* show first slide */
			position: relative;
		}
		.carousel.fade .item.active {
			opacity: 1;
		}
	</style>


    <title>LGM - About Us</title>

   <?php include_once('plug.inc');?>
</head>

<body>

	<!--Facebook embed -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    	<?php include('nav.inc');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="navy">ABOUT US -
                    <small>Life Gate Ministries Worldwide</small>
                </h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
				
                <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" style="height:150px; background-image: url(images/images/misc/bible.jpg); background-repeat:repeat;">
									  <!-- Wrapper for slides -->
										<div class="carousel-inner navy text-left">
										  <div class="item active">
											<p>Contact</p>
											<p>Prayer:&nbsp;<i class="fa fa-phone"></i> +234-806-291-9319</p>
											<strong><i class="fa fa-facebook">&nbsp;facebook</i></strong>
											<strong><i class="fa fa-twitter">&nbsp;twitter</i></strong>
											<strong><i class="fa fa-envelope">&nbsp;Email</i></strong>&nbsp;
											<strong><i class="fa fa-youtube">&nbsp;Youtube</i></strong>
										  </div>
										  <div class="item">
											<p>Partnership</p>
											<p>Partnership:&nbsp;<i class="fa fa-phone"></i> +234-812-146-8227</p>
											<strong><i class="fa fa-facebook">&nbsp;facebook</i></strong>
											<strong><i class="fa fa-twitter">&nbsp;twitter</i></strong>
											<strong><i class="fa fa-envelope">&nbsp;Email</i></strong>&nbsp;
											<strong><i class="fa fa-youtube">&nbsp;Youtube</i></strong>
										  </div>
										  
										  <div class="item">
											<p>Prayer and Counselling</p>
												<p>Enquiry&nbsp;<i class="fa fa-phone"></i> +234-705-313-7533</p>
												<strong><i class="fa fa-facebook">&nbsp;facebook</i></strong>
												<strong><i class="fa fa-twitter">&nbsp;twitter</i></strong>
												<strong><i class="fa fa-envelope">&nbsp;Email</i></strong>&nbsp;
												<strong><i class="fa fa-youtube">&nbsp;Youtube</i></strong>
											</div>
										  
										  <div class="item">
											<p>Discipleship</p>
												<p>Discipleship&nbsp;<i class="fa fa-phone"></i> +234-909-560-8270</p>
												<strong><i class="fa fa-facebook">&nbsp;facebook</i></strong>
												<strong><i class="fa fa-twitter">&nbsp;twitter</i></strong>
												<strong><i class="fa fa-envelope">&nbsp;Email</i></strong>&nbsp;
												<strong><i class="fa fa-youtube">&nbsp;Youtube</i></strong>
										  </div>
										  
										    
										</div>
									  </div><hr><p>
				
				<h2 class="navy">Partner With Us</h2>
				<div class="fb-like" data-href="https://web.facebook.com/lifegateheadquarter" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>	
				
				<div class="fb-comments" data-width="400px;" data-href="https://web.facebook.com/lifegateheadquarter" data-numposts="10"></div>				  
				
				<hr />
				<a href="https://twitter.com/intent/tweet?screen_name=lgmww" class="twitter-mention-button" data-show-count="false">Tweet to @lgmww</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="well col-md-6 col-sm-12 col-lg-6 col-xs-12 text-justify">
                <h2 style="border-bottom:5px solid navy; color:navy;">About Us</h2>
					
					<?php
							$about = new page_comment();
							echo $about->about1();
 					?>
					
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        
        <!-- /.row -->

        <!-- Our Customers -->
        
        <!-- /.row -->

        
	
        <!-- Footer -->
        

    </div>
	
	<?php include('footer.inc');?>
    
