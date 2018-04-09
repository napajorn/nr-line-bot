<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'f9ba5dd0df806c0b8ceee970d8eccbb1';
$access_token  = 'sx9hDetd31ON3z94Szr2pfsOKb1+zXSq3lgKXYKWyuAbk6HL57+TUPIHaWtM+0ANT4VLHMRGRHl3gmtn06Ur0kSvNmSh9saUBHsv8+UBIsZKZJuCC4Zkdv3c6lO3/M65sekjBNmCUfY7k4WSORV1GQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}

?>