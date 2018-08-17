<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LGM - Audio Ministration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
					Audio Messages
				</h1>
					<ol class="breadcrumb">
                    <li><a href="index.html"><i class=" fa fa-home"></i></a>
                    </li>
                    <li class="active">Audio Messages</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	
<p>Click on the play button to listen to message.....</p>

	<div class="row">
		<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">		
				<div id="cp_widget_905f2b2b-155d-47a3-a2be-a20289f3da03">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_905f2b2b-155d-47a3-a2be-a20289f3da03"; cpo["_fid"] = "AcBANut3wvtK";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='https://www.cincopa.com/email-campaigns-integration'>Video Email</a> for Business solution.<span>New Gallery 2016/10/19</span><span>The Winning Attitude Part 2</span><span>By Apostle Duncan Ofiyai</span></noscript>		
	
	`	</div>
		
		
		
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
	
    <!--Snippet provided by Interswitch ends here -->
		<table class="table table-hover table-bordered">
			<tr>
				<th style="background:linear-gradient(navy,skyblue); color:white;">Downloads</th>
			</tr>
			<tr>
				<td><a href="force_download.php">Download Winning Attitude  Part 2</a>
				<button class="btn btn-primary btn-sm" onClick="downloadSoundFile('audio/mp3/The Winning Attitude Part 2.mp3');">Download and play song</button>
					<button class="btn btn-primary btn-sm" onClick="playSound()" disabled><i class="fa fa-play"></i></button>
		 		<button class="btn btn-primary btn-sm" onClick="stopSound()" disabled><i class="fa fa-stop"></i></button>
				</td>
			</tr>
			
		</table>
		</div>
		
	</div>


</div>



<script> 
// WebAudio context
var context = new window.AudioContext();
var source = null;
var audioBuffer = null;

function stopSound() {
  if (source) {
    source.stop();
  }
}

function playSound() {
  // Build a source node for the audio graph
  source = context.createBufferSource();
  source.buffer = audioBuffer;
  source.loop = false;
  // connect to the speakers
  source.connect(context.destination);
  source.start(); // Play immediately.
}

function initSound(audioFile) {
  // The audio file may be a mp3, we must decode it before playing it from memory
  context.decodeAudioData(audioFile, function(buffer) {
    console.log("Song decoded!");
    // audioBuffer the decoded audio file we're going to work with
    audioBuffer = buffer;
    
    // Enable all buttons once the audio file is
    // decoded
    var buttons = document.querySelectorAll('button');
    buttons[1].disabled = false; // play
    buttons[2].disabled = false; // stop
    console.log("Binary file has been loaded and decoded, use play / stop buttons!")
  }, function(e) {
    console.log('Error decoding file', e);
  }); 
}

  // Load a binary file from a URL as an ArrayBuffer.
function downloadSoundFile(url) {
   var xhr = new XMLHttpRequest();
   xhr.open('GET', url, true);

   xhr.responseType = 'arraybuffer'; // THIS IS NEW WITH HTML5!
  
   xhr.onload = function(e) {
      console.log("Song downloaded, decoding...");
      initSound(this.response); // this.response is an ArrayBuffer.
   };
  
   xhr.onerror = function(e) {
    console.log("error downloading file");
   }

   xhr.send();
   console.log("Ajax request sent... wait until it downloads completely");
}  
</script>


	
	
<?php require_once('footer.inc');?>




	
		
