<ul>
<?php
/// Twitter User Name:  example USERNAME or ACCOUNT NUMBER (109218338) work
$username = "BenBerden"; 

/// Limit the number of Twitter Tweats displayed on webpage
$limit = 6;

/********************************************************************************************/
/********************************************************************************************/
/*****  Warrning !! Alter code below only if your a intermediate to advaced  PHP user  *******/
/*****  	PHP SIMPLEXML is used to render TWITTER XML feed		      *******/
/********************************************************************************************/
/********************************************************************************************/

///* $rss_url to the location of your RSS twitter feed */Twitter RSS Feed URL
$rss_url = 'http://twitter.com/statuses/user_timeline.rss?screen_name='.$username.'&count='.$limit;


if (!$rss_data = @file_get_contents($rss_url)) {
	echo "<p>Ooooops!</p><p>Looks like the Twitter feed isn't working at the moment.</p>";
} else {

	$rss_xml = SimpleXML_Load_String($rss_data);
	
	$channel_title = $rss_xml->channel->title;
	$channel_link = $rss_xml->channel->link;
	
	foreach ($rss_xml->channel->item as $item) {
		///* $ns_dc pulls tweat soucre data from <twitter:source> xml tag */
		$ns_dc = $item->children('http://api.twitter.com');
		
		$pub_date = $item->pubDate;
		$item_title = $item->title;
		$item_link = $item->link;
		$item_description = $item->description;
		$tweet = explode(": ", $item_title); 
		
		///* links in Twitter Tweats */
		for ($i=2; $i<=substr_count($item_title, ": "); $i++) $tweet[1] .= ": " .$tweet[$i]."";      
		
		///* format Twitter Tweat */
		///* This line will split the $item_title this is needed so that we can
		/// split the title into two parts. Part 1 is the username and part 2 
		/// is the actual message. */
		
		$tweetmessage = preg_replace("/(http:\/\/[^\s]+)/", "<a href=\"$1\" rel=\"nofollow\" class='xyz'>$1</a>", $tweet[1]);
		$tweetmessage = preg_replace("/(@[^\s]+)/", "<a href=\"http://twitter.com/search?q=$1\" rel=\"nofollow\" target=\"_blank\"><span class=\"twit_at\">$1</span></a>", $tweetmessage);
	       
		///* Clean up Twitter Tweat time stamp */ 
		$pub_date2 =  date("l, M j \- g:ia",strtotime($pub_date = $item->pubDate));
		
		///* HTML FORMAT LAYOUT */
		///*The next set of lines change the format of certain elements, the first one
		///uses regex to find and replace the URL’s and make them actively clickable. 
		///Note the use of nofollow there too. The second line formats other users by 
		///looking for their @username names and changing the style of it.*/
		echo "<li>\n";
		echo "<ul class='twitContent'>\n";
		echo "<li><span class=\"twitMsg\">". $tweetmessage ."</span></li>\n";
		//echo "<br/><span class=\"timestamp\">".$pub_date." </span>";
		echo "<li><a href=\"". $item_link ."\" rel=\"nofollow\"><span class=\"pubDate\">".$pub_date2."</span></a><span class=\"source\" >via ".$ns_dc."</span></li>\n";
		echo "</ul>\n";
		echo "</li>";  
		//echo "<br/><a href=\"". $item_link ."\" rel=\"nofollow\">View in Twitter</a></li>\n";   
	}
}
?>
</ul>