<?php

namespace Nestak\NiceReply\Resources;

use GuzzleHttp\Psr7\Request;
use Nestak\NiceReply\Client;
use Nestak\NiceReply\Models\Model;
use Nestak\NiceReply\NiceReplyException;
use Rize\UriTemplate;

abstract class Resource
{

	/** @var Client $client */
	protected Client $client;

	protected $service;
	/**
	 * @var mixed
	 */
	private $actions;

	const DEFAULT_COLLECTION_NAME = '_results';

	public function __construct($service, $resources)
	{
		$this->service = $service;
		$this->client = $service->getClient();
		$this->actions = $resources['actions'];
	}

	/**
	 * @throws NiceReplyException
	 */
	protected function makeAction($actionName, $parameters = [], $returnClass = null)
	{
		if (!isset($this->actions[$actionName])) {
			throw new \Exception('Undefined action: ' . $actionName);
		}

		$action = $this->actions[$actionName];
		if (isset($action['parameters'])) {
			foreach ($action['parameters'] as $parameterName => $parameter) {
				if (isset($parameter['required']) && $parameter['required'] && !isset($parameters[$parameterName])) {
					throw new \Exception($actionName . ' missing required parameter: ' . $parameterName);
				}

				if (isset($parameter['type'])) {
					if ($parameter['type'] == 'boolean') {
						$parameters[$parameterName] = (bool)$parameters[$parameterName];
					}
				}
			}
		}

		$uri = new UriTemplate();

		$postBody = [];
		if (isset($parameters['body'])) {
			$postBody = json_encode($parameters['body']);
			unset($parameters['body']);
		}

		$url = $uri->expand($action['path'], $parameters);
		$data = $this->client->execute($action['method'], $url, $postBody);

		$returnClass = new $returnClass;
		if ($returnClass instanceof Model) {
			$returnClass->map($data->{self::DEFAULT_COLLECTION_NAME});
		} else {
			$returnClass->map($data);
		}
		return $returnClass;
	}
}
