<?php

require_once 'twitter-php/twitter.class.php';

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'VCT2ZZSUoNjrJ5XFJwzkmfelv';
$CONSUMER_SECRET = 'eK97C55gosRBDbl44mSakBm2Vdiop26gPCyVUIHcRmzw4NQXVZ';
$ACCESS_TOKEN = '4350966916-YxA3jbLgJcqpRNiohmUdKZA658fjlkgfPwiW35E';
$ACCESS_TOKEN_SECRET = 'RkGLLTGollR2Vrum1yHSRSnA034tFevq5BjrYRi5JT1GY';

$twitter = new Twitter($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

// retrieve data
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

// api data
$params = array(
	'screen_name' => 'ExoHyb',
	'count' => 20,
  'includes_rts' => true
);

$results = $twitter->request($api, 'GET', $params);
$results = $twitter->search('DojoEntreprisesAgiles', true);

// output as JSON
echo json_encode($results);
?>