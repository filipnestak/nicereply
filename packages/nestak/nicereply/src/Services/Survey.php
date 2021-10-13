<?php

namespace Nestak\NiceReply\Services;

use Nestak\NiceReply\Client;
use Nestak\NiceReply\Resources\Surveys\{
	Surveys,
	Ratings,
};

class Survey extends Service
{
	public Surveys $surveys;
	public Ratings $ratings;

	public function __construct(Client $client)
	{
		parent::__construct($client);

		$this->surveys = new Surveys(
			$this,
			[
				'actions' => [
					'list' => [
						'path'       => 'surveys',
						'method'     => 'GET',
						'parameters' => [
							'sort_order' => [
								'type'        => 'string',
								'validValues' => [
									'desc',
									'asc'
								],
								'required'    => false
							]
						]
					],
					'show' => [
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

		$this->ratings = new Ratings(
			$this,
			[
				'actions' => [
					'list' => [
						'path'       => 'surveys/{ID}/ratings',
						'method'     => 'GET',
						'parameters' => [
							'ID'           => [
								'type'     => 'integer',
								'required' => true
							],
							'sort_order'   => [
								'type'        => 'string',
								'validValues' => [
									'desc',
									'asc'
								],
								'required'    => false
							],
							'period_start' => [
								'type'     => 'string',
								'required' => false
							],
							'period_end'   => [
								'type'     => 'string',
								'required' => false
							],
						]
					]
				]
			]
		);
	}
}
