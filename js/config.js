$(document).ready(function(){

	// DOM elements
	var screename = $('.screename');
	var username = $('.username');
	var tweet_text = $('.tweet_text');
	var img_profile = $('.picture');


	// Hashtag of your event
	var hashtag = '#LOL';
	// time to refresh last tweet
	var refresh_delai = 6000;
	/*
	// parameters to send to the Twitter Search api 1.1
	// you will need to change the data sent in Post function bellow also change params in Server.php
	var parameters =
	{
		// query
		'q':hashtag
	};

	*/

	function display(lastTweet)
	{ // Display the tweets ' DOM elements
		$(".display").fadeOut('slow');
		tweet_text.text(lastTweet.text);
		username.html('<img src="img/iphone.png">  ' + lastTweet.source);
		screename.text(lastTweet.user.screen_name);
		img_profile.attr('src',lastTweet.user.profile_image_url);
		$(".display").fadeIn('slow');
	}

	setInterval(function(){
	// Getting Data from the Server
	var request = $.post("twitterOAuth/server.php",{"hashtag":hashtag}).done(function(data){
			var lastTweet = data;
			display(lastTweet);
	});

	},5000);



});
