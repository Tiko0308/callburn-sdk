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

	
}