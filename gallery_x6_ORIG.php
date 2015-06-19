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

		$video[1] = '62098345';
			$project_name[1] = 'Polaris';
			$project_description[1] = 'Product Launch';
			$title_thumbnail[1] = 'Polaris';
			$thumbnail[1] = 'polaris_orv_launch.png';

			$video[2] = '62098343';
			$project_name[2] = 'Porsche';
			$project_description[2] = 'Autoshow';
			$title_thumbnail[2] = 'Porsche';
			$thumbnail[2] = 'porsche_autoshow.png';

			$video[3] = '52634688';
			$project_name[3] = 'Victory';
			$project_description[3] = 'Brand Video';
			$title_thumbnail[3] = 'Victory';
			$thumbnail[3] = 'victory_brand.png';
               
                $video[4] = '52634685';
			$project_name[4] = 'Dell';
			$project_description[4] = 'Customer Awards';
			$title_thumbnail[4] = 'Dell';
			$thumbnail[4] = 'dell_customer_awards.png';

			$video[5] = '62098342';
			$project_name[5] = 'Target';
			$project_description[5] = 'Meeting Opener';
			$title_thumbnail[5] = 'Target';
			$thumbnail[5] = 'target_meeting_opener.png';

                $video[6] = '51453301';
			$project_name[6] = 'Mayo Clinic';
			$project_description[6] = 'What If';
			$title_thumbnail[6] = 'Mayo Clinic';
			$thumbnail[6] = 'Mayo_What_If_Final.png';

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
						   <div class="result">
								<a href="?video=<?php echo $i; ?>"><img src="assets/images/<?php echo $thumbnail[$i]; ?>" width="135" height="105" alt="<?php echo $title[$i]; ?>"  /></a><br/>
								<div><?php echo $title_thumbnail[$i]; ?></div>
							</div>															
					
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

