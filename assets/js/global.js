$(document).ready( function() {
	// set defaults
	$(".result div").hide();
	$(".result").hover( function() {
			$(this).children().show();
		},
		function() {
			$(this).children("div").hide();
		}
	);
	
	// touch o'logic that counts the kids 
	// and positions and displays only necessary elements
	var result_count = $('.result').length;
	if (result_count <= 5) {
		var result_count = $('.result').length;
		var result_width = result_count * $('.result').outerWidth();
		
		$("#movies").css({
			width: result_width+'px',
			position:'relative'
		});
		
		$("#rightBox, #leftBox").css({
			height: '0',
			border: '1px solid #FFFFFF',
			width: '0'
		});
	}
	
	if(result_count == 6){
		move_left = 187;
		move_right = -150;
	}else if(result_count == 7){
		move_left = 175;
		move_right = -320;
	}else if(result_count == 8){
		move_left = 175;
		move_right = -475;
	}
	
	
	// positions left and right hover boxes
	$("#leftBox").mouseover( function() {
		var movies = $("#movies");
		var movies_position = movies.position();
		
		if (movies_position.left < 40) {
			$("#movies").animate({ 
				left: move_left + "px"
			}, 1000
			);
		}
		
	});
	
	$("#rightBox").mouseover( function() {
		var movies = $("#movies");
		var movies_position = movies.position();

		if (movies_position.left > 0) {
			$("#movies").animate({ 
				left: move_right + "px"
			}, 1000
			);
		}
		
	});
	
});

// The movie switcher
function change(vimeoID, title, description) {
	$('#feature').html('<iframe src="http://player.vimeo.com/video/'+vimeoID+'?title=0&amp;byline=0&amp;portrait=0&amp;color=f99d23&amp;autoplay=true" width="645" height="362" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
	$('#project_name').html(title + "&nbsp;");
	$('#project_description').html(description + "&nbsp;");
	$('.desc').hide();
}