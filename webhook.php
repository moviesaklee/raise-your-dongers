<?PHP

$webhookKey = 'LTAPkVwt3E5MssrVA4uacoK9'; // key from http://getredditalerts.com
$redditUsername = 'Admiral_Egg'; //username of your bot
$redditPassword = 'Jaller44'; //password of your bot


//you shouldn't need to edit anything below this line, unless you want to customize the response

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
echo "<pre>";

if(!isset($_POST['redditAlertJson'])){ 
	die('Missing redditAlertJson');
}

$redditAlertJson = $_POST['redditAlertJson'];

$redditAlert = json_decode($redditAlertJson);

if($redditAlert->webhookKey!=$webhookKey){
	die('Wrong webhookKey');
}

require 'reddit.php';
$reddit = new reddit($redditUsername,$redditPassword);

$response = $reddit->addComment($redditAlert->reddit->name,'👽░░░░░👽░░░░▄▀▀▀▀▀▀▀▀▀▀▀▀▀▀▄░░👽░░░👽░░░░
░░░░👽░░░▄▀░░░░░░░░░░░░░▒▒▒▒▒▄░👽░░░░░░░
░░👽░░░▄▀▒▒▒▒░░░░▒▒▒▒▒▒▒▒▒▒▒▒▒█░░👽░░░👽░
░░░░░█▒▒▒▒░░░░▒▒▒▒▒▒▒▒▒▒░░░░▒▒█░░👽░░░░
░░░░█▒▒▄▀▀▀▀▀▄▄▒▒▒▒▒▒▒▒▒▄▄▀▀▀▀▀▀▄░░░░👽
👽░▄▀▒▒▒▄█████▄▒█▒▒▒▒▒▒▒█▒▄█████▄▒█░░░░
░█▒▒▒▒▐██▄████▌▒█▒▒▒▒▒█▒▐██▄████▌▒█👽░░
▀▒▒▒▒▒▒▀█████▀▒▒█▒░▄▒▄█▒▒▀█████▀▒▒▒█░░
▒▒▐▒▒▒░░░░▒▒▒▒▒█▒░▒▒▀▒▒█▒▒▒▒░░░░▒▒▒▒█👽
▒▌▒▒▒░░░▒▒▒▒▒▄▀▒░▒▄█▄█▄▒▀▄▒▒▒░░░░▒▒▒▒▌
▒▌▒▒▒▒░▒▒▒▒▒▒▀▄▒▒█▌▌▌▌▌█▄▀▒▒▒▒▒░░░▒▒▒▐
▒▐▒▒▒▒▒▒▒▒▒▒▒▒▒▌▒▒▀███▀▒▌▒▒▒▒▒▒▒▒▒▒▒▒▌
▀▀▄▒▒▒▒▒▒▒▒▒▒▒▌▒▒▒▒▒▒▒▒▒▐▒▒▒▒▒▒▒▒▒▒▒█░
▀▄▒▀▄▒▒▒▒▒▒▒▒▐▒▒▒▒▒▒▒▒▒▄▄▄▄▒▒▒▒▒▒▄▄▀░░
▒▒▀▄▒▀▄▀▀▀▄▀▀▀▀▄▄▄▄▄▄▄▀░░░░▀▀▀▀▀▀░░👽░░
▒👽▒▒▀▄▐▒▒▒▒▒▒▒▒▒▒▒▒▒▐░░░░👽░░░👽░░░░░👽░░');
var_dump($response);

exit;
