<!DOCTYPE html>
<head>
	<title>Media Loft Video Player</title>
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<LINK REL="icon" type="image/png" href="http://demos.medialoft.com/favicon.ico">
	<title>Media Loft Video Player</title>
	<script type="text/javascript" language="javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js"></script>	
	<!--[if lt IE 7]>
		<script type="text/javascript" language="javascript" src="assets/js/dd_belatedpng.js"></script>
		<script type="text/javascript" language="javascript" src="assets/js/png_fixes.js"></script>
	<![endif]-->
	<script type="text/javascript" language="javascript" src="assets/js/global.js"></script>
	<link rel="stylesheet" media="all" href="assets/css/global.css" />
	<?php 		
		if(isSet($_GET['video'])){ $vID = $_GET['video']; }else{ $vID = 1; }

		      $video[1] = '125087373';
			$project_name[1] = 'Optum';
			$project_description[1] = 'Optum Day Teaser';
			

		
		
	?>
</head>
<body>
		
		<div id="container">
			<div id="leftBox">
			
			</div>
			<div id="rightBox">
			
			</div>
			<div id="top">&nbsp;</div>
			<div id="content">
			
				<img class="logo" src="assets/images/media_loft_logo.gif" />
				<div id="center">
					<div id="feature">
						<iframe src="http://player.vimeo.com/video/<?php echo $video[$vID]; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=f99d23&amp;autoplay=true" width="645" height="362" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
	
				<div id="info">
					<div class="desc">
						<p>
						 <!--Click Thumbnails Below-->
						</p>
					</div> <!-- end desc -->
					<h1 id="project_name"><?php echo $project_name[$vID]; ?></h1>
					<span id="project_description"><?php echo $project_description[$vID]; ?></span>
				</div> <!-- end info -->
				<div id="movies_container">
				<div id="movies">
					<?php
					$i = 1;	
					foreach ($video as &$value) {
					?>    
						   														
					
					<?php    
						$i++;
					}				
					?>
				</div> <!-- end movies -->
				</div> <!-- end movies_container -->
				<div id="title">&nbsp;</div>
			</div> <!-- end content -->
			<div id="bottom">&nbsp;</div>
		</div>
	</body>
</html>

