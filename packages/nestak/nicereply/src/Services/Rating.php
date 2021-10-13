<?php

namespace Nestak\NiceReply\Services;

use Nestak\NiceReply\Client;
use Nestak\NiceReply\Resources\Ratings\Ratings;

class Rating extends Service
{
	public Ratings $ratings;

	public function __construct(Client $client)
	{
		parent::__construct($client);

		$this->ratings = new Ratings(
			$this,
			[
				'actions' => [
					'create' => [
						'path'   => 'ratings',
						'method' => 'POST'
					],
					'update' => [
						'path'       => 'surveys/{ID}',
						'method'     => 'GET',
						'parameters' => [
							'ID' => [
								'type'     => 'integer',
								'required' => true
							]
						]
					]
				]
			]
		);
	}
}
