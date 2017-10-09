<?php 

namespace Callburn;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Middleware;
class Client
{

	protected $key;

	protected $url = 'https://api.callburn.com/';

	protected $url_2 = 'v1/api/messages';

	public function __construct($key = false)
    {
    	
       	return $this->key = $key;
    }

	public function create($request)
	{

		$client = new GuzzleClient();
		$stream['name'] = "dasdas";
		$stream['caller_id'] = $request->caller_id;
		$stream['recipients'] = $request->recipients;
		$stream['audio_text'] = $request->audio_text;
		if (isset($request->audio_lang)) {
			$stream['audio_lang'] = $request->audio_lang;
		} else {
			$stream['audio_lang'] = 'Karen';
		}
		$stream['audio_lang'] = 'Karen';
		$header['Authorization'] = $request->headers;
		$apiUrl = $this->url.$this->url_2;
		$message = $client->post($apiUrl, ['headers' => $header,'form_params' => $stream]);
		return $message->getBody()->getContents();
		
	}
}