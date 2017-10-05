<?php 

namespace Callburn;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
	protected $key;

	public function __construct($key)
    {
    	$client = new GuzzleClient();
    	dd($client);
       	return $this->key = $key;
    }
	public function test()
	{
		return "sax kayfota";
	}

	
}