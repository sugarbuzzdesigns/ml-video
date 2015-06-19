<!DOCTYPE html>
<html>
<head>
	<title>Media Loft Video Player</title>
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<LINK REL="icon" type="image/png" href="assets/images/favicon.png">
	<title>Media Loft Video Player</title>
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="assets/js/froogaloop.js"></script>	
	<script src="assets/js/global.js"></script>
	<link rel="stylesheet" media="all" href="assets/css/global.css" />
	<?php 		
		if(isSet($_GET['video'])){ $vID = $_GET['video']; }else{ $vID = 1; }

		$video[1] = '1846726';
		$project_name[1] = 'Polaris';
		$project_description[1] = 'Product Launch';
		$title_thumbnail[1] = 'Polaris';
		$thumbnail[1] = 'polaris_orv_launch.png';

		$video[2] = '1846726';
		$project_name[2] = 'Porsche';
		$project_description[2] = 'Autoshow';
		$title_thumbnail[2] = 'Porsche';
		$thumbnail[2] = 'porsche_autoshow.png';

		$video[3] = '1846726';
		$project_name[3] = 'Victory';
		$project_description[3] = 'Brand Video';
		$title_thumbnail[3] = 'Victory';
		$thumbnail[3] = 'victory_brand.png';
           
        $video[4] = '1846726';
		$project_name[4] = 'Dell';
		$project_description[4] = 'Customer Awards';
		$title_thumbnail[4] = 'Dell';
		$thumbnail[4] = 'dell_customer_awards.png';

		$video[5] = '1846726';
		$project_name[5] = 'Target';
		$project_description[5] = 'Meeting Opener';
		$title_thumbnail[5] = 'Target';
		$thumbnail[5] = 'target_meeting_opener.png';

        $video[6] = '1846726';
		$project_name[6] = 'Mayo Clinic';
		$project_description[6] = 'What If';
		$title_thumbnail[6] = 'Mayo Clinic';
		$thumbnail[6] = 'Mayo_What_If_Final.png';

	?>
</head>
	<body>	
		<div id="container">
			<img class="logo" src="assets/images/ML_Logo_video-page.jpg" />
<!-- 			<div id="leftBox">
			
			</div>
			<div id="rightBox">
			
			</div>	 -->	
			<div id="content">
				<div class="wrap">
					<div id="feature">
						<div id="video-cover"><img src="assets/images/Play_Button.png" alt=""></div>
						<iframe id="player1" src="http://player.vimeo.com/video/<?php echo $video[$vID]; ?>?api=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=EA321D&amp;autoplay=false&amp;player_id=player1" width="645" height="362" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
		
					<div id="info">
						<div class="desc">
							<p>
							 <!--Click Thumbnails Below-->
							</p>
						</div> <!-- end desc -->
						<span id="project_description"><?php echo $project_description[$vID]; ?></span>
						<h1 id="project_name"><?php echo $project_name[$vID]; ?></h1>
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
				</div>
			</div> <!-- end content -->
			<div id="bottom">&nbsp;</div>
		</div>
	</body>
</html>

