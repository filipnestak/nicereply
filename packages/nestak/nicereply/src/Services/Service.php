<?php

namespace Nestak\NiceReply\Services;

use GuzzleHttp\ClientInterface;
use Nestak\NiceReply\Client;

abstract class Service
{
	/**
	 * @var ClientInterface
	 */
	private ClientInterface $client;

	/**
	 * @param ClientInterface $client
	 */
	public function __construct(ClientInterface $client)
	{
		$this->client = $client;
	}

	public function getClient(): ClientInterface
    {
		return $this->client;
	}

}
