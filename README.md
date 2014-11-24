LiveTweetGUI
============


![Alt text](http://i.imgur.com/RXcybqf.png "Live tweets GUI for events")
This is a simple HTML UI that allows you to show live tweets for special events based on JQuery & Twitter's OAuth API for PHP
  
  Configure the LiveTweetGUI
  1. Open config.js to change the hashtag variable
    
        // Hashtag of your event
      	var hashtag = '#LOL';
      	
  You can also choose the delay between tweets
         
         // time to refresh last tweet

    	   var refresh_delai = 6000;
    	   
  2. If you wanna send more parameters to Twitter Api 1.0 please uncomment the parameters var in line 17
  you will need to change the data sent in $.post ( line 37 ) function bellow also change params in Server.php

      <code>
       var parameters =
      	{
      		// query
      		'q':hashtag
      	};
    	</code>
    	
    
