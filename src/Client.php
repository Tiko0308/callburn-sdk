<?php 

namespace Callburn;

class Client
{
	protected $key;

	public function __construct($key)
    {
    	$client = new GuzzleHttp\Client();
    	dd($client);
       	return $this->key = $key;
    }
	public function test()
	{
		return "sax kayfota";
	}

	$VoiceMessage->recipients = array (31654286496);
	$VoiceMessage->body = 'This is a test message. The message is converted to speech and the recipient is called on his mobile.';
	$VoiceMessage->language = 'en-gb';
	$VoiceMessage->voice = 'female';
	$VoiceMessage->ifMachine = 'continue'; // We don't care if it is a machine.
	try {
	    $VoiceMessageResult = $MessageBird->voicemessages->create($VoiceMessage);
	    var_dump($VoiceMessageResult);
	} catch (\MessageBird\Exceptions\AuthenticateException $e) {
	    // That means that your accessKey is unknown
	    echo 'wrong login';
	} catch (\MessageBird\Exceptions\BalanceException $e) {
	    // That means that you are out of credits, so do something about it.
	    echo 'no balance';
	} catch (\Exception $e) {
	    echo $e->getMessage();
	}
}