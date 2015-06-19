$(document).ready( function() {
	// touch o'logic that counts the kids 
	// and positions and displays only necessary elements
	var result_count = $('.result').length;
	var movies = $("#movies");
	if (result_count <= 5) {
		console.log('only 5');
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
		move_left = 200;
		move_right = -143;
	}else if(result_count == 7){
		move_left = 175;
		move_right = -320;
	}else if(result_count == 8){
		move_left = 175;
		move_right = -475;
	}

	function loopRight(){
	    movies.stop().animate({left:'+=50'}, 300, 'linear', loopRight);
	}      

	function loopLeft(){
	    movies.stop().animate({left:'-=50'}, 300, 'linear', loopLeft);
	}   	  

	function stop(){
	    movies.stop();
	}	
	
	
	// // positions left and right hover boxes
	// $("#leftBox").hover( function() {
	// 	var movies_position = movies.position();
	// 	loopRight();		
		
	// }, function(){
	// 	stop();
	// });
	
	// $("#rightBox").hover( function() {
	// 	var movies_position = movies.position();
	// 	loopLeft();
		
	// }, function(){
	// 	stop();
	// });



$(".scroll").hover(function () {
   loop();
},function () {
   stop();
});



    var iframe = $('#player1')[0];
    var player = $f(iframe);
    var status = $('.status');

    // When the player is ready, add listeners for pause, finish, and playProgress
    player.addEvent('ready', function() {
        status.text('ready');
        
        player.addEvent('pause', onPause);
        player.addEvent('finish', onFinish);
        player.addEvent('playProgress', onPlayProgress);
    });



    // Call the API when a button is pressed
    $('#video-cover').on('click', function() {
    	$(this).fadeOut();
        player.api('play');
    });

    function onPause(id) {
        status.text('paused');
    }

    function onFinish(id) {
        status.text('finished');
    }

    function onPlayProgress(data, id) {
        status.text(data.seconds + 's played');
    }	
	
});

// The movie switcher
function change(vimeoID, title, description) {
	$('#feature').html('<iframe src="http://player.vimeo.com/video/'+vimeoID+'?title=0&amp;byline=0&amp;portrait=0&amp;color=f99d23&amp;autoplay=true" width="645" height="362" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
	$('#project_name').html(title + "&nbsp;");
	$('#project_description').html(description + "&nbsp;");
	$('.desc').hide();
}