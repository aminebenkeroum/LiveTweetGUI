
<?php

require_once 'twitteroauth/twitteroauth.php';

header("Content-Type: application/json");

define('CONSUMER_KEY', 'p0gq2z5NoVcjbFRLkmors80eA');
define('CONSUMER_SECRET', 'NbBBQ4k4ZgMfDjtIJHIXXEY3mKjFlIQFbsJFEh9xLfOaB7E0gq');
define('ACCESS_TOKEN', '2651747054-M8fsOZlUk5vreIWBQ2T32peksjrmrRfU9ZpSjVn');
define('ACCESS_TOKEN_SECRET', 'dK8ZRfDycyL79V23OO80qDNHvMsIfy4iCrBrdNzKJUi9S');
 
function search(array $query)
{
  $toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
  return $toa->post('https://stream.twitter.com/1.1/statuses/filter.json ', $query);
}
 
$query = array(
  "locations" => "122.75,36.8,-121.75,37.8"
);
  
$results = search($query);

echo json_encode($results);

?>