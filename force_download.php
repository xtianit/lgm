<?php
	if(isset($_POST['file_name'])){
		$file = $_POST['file_name'];
		header('Content-type: audio/mpeg3');
		header('Content-Disposition: attachment; filename="'.$file.'"');
		readfile('audio/mp3/'.$file);
		exit();
	}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LGM - Audio Download</title>

    <!-- Bootstrap Core CSS -->
    <?php include_once('plug.inc');?>

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <h1 class="page-header" style="font-size:3vw; color:navy;">
					Download Now
				</h1>
					<ol class="breadcrumb">
                    <li><a href="index.php"><i class=" fa fa-home"></i></a>
                    </li>
                    <li class="active">Audio Download</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	<div class="breadcrumb">
		<p>File Name:<em>The Winning Attitute Part 1</em></p>
	</div>
	<form action="force_download.php" method="post" name="download form">
	<input name="file_name" value="The Winning Attitude Part 2.mp3" type="hidden" />
	<input class="btn btn-primary btn-block" type="submit" value="DOWNLOAD NOW" />
	</form>
	</div>
	
	





    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>


