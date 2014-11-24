<?php

require_once 'twitteroauth/twitteroauth.php';

if(isset($_POST['hashtag']))
{
  extract($_POST);
}
else{
  $hashtag = "#holidays";
}

define('CONSUMER_KEY', 'p0gq2z5NoVcjbFRLkmors80eA');
define('CONSUMER_SECRET', 'NbBBQ4k4ZgMfDjtIJHIXXEY3mKjFlIQFbsJFEh9xLfOaB7E0gq');
define('ACCESS_TOKEN', '2651747054-M8fsOZlUk5vreIWBQ2T32peksjrmrRfU9ZpSjVn');
define('ACCESS_TOKEN_SECRET', 'dK8ZRfDycyL79V23OO80qDNHvMsIfy4iCrBrdNzKJUi9S');

function search(array $query)
{
  $toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
  return $toa->get('search/tweets', $query);
}


$query = array(
  "q" => $hashtag ,
  "count" => "1"
);

$results = search($query);

$lastTweet = $results->statuses[0];

echo json_encode($lastTweet);

?>
