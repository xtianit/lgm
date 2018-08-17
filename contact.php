<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LGM - Contact Us</title>

    <?php include_once('plug.inc');?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <!-- Navigation -->
		<?php require_once('nav.inc');?>
    <!--Close Navigation-->

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us</h1>
					<ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row"><!--maps position -->
            

            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h2 class="breadcrumb" style="padding-left:0px;">Contact Details</h2>
                <marquee>
                    Etajeruo-Akpoevwa Layout, off Sapele/Effurun Expressway, After Spare Parts Market, Effurun, Delta State<br>
                </marquee>
                <p>Prayer:&nbsp;<i class="fa fa-phone"></i> +234-806-291-9319</p>
				<p>Partnership:&nbsp;<i class="fa fa-phone"></i> +234-812-146-8227</p>
				<p>Enquiry&nbsp;<i class="fa fa-phone"></i> +234-705-313-7533</p>
				<p>Discipleship&nbsp;<i class="fa fa-phone"></i> +234-909-560-8270</p>
				
                <p><i class="fa fa-envelope-o"></i> 
                    <a href="mailto:name@example.com">info@lifegateministriesworldwide.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    Monday - Sunday: 9:00 AM to 5:00 PM
				</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="breadcrumb" style="padding-left:0px;">Request Form</h2>
                <form action="processContact.php" name="sentMessage" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
					<input type="submit" name="send_message" value="Send Message" class="btn btn-primary">
                </form>
            </div>

        </div>
        <!-- /.row -->
		 </div>

        <hr>

        <?php include('footer.inc');?>
 