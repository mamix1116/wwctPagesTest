<?php 


	session_start();

	include("twitteroauth/twitteroauth.php");

	$apikey="Cvja9EsFTwYZ81h1AM6CzIaYj";
	$apisecret="vQv14OnIPF6P5Vpxw26HCTen18XGp6mbooBDujDzupbnUJDcjX";
	$accesstoken="2853260832-y3FEcDiV3nQmMD4HOww6dfCeIi0D7Maih1MTWmH";
	$accesssecret="4AYxgaHgU3riaK6jviag8OErp1jkamhDEbB1gemrbRcoP";

	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret)

	$tweets =
	$connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=WWCode_Tokyo&count=5");


	foreach ($tweets as $tweet) {
		echo $tweet->text;
		echo "<br />";
	}

?>