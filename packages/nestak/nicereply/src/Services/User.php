<?php

namespace Nestak\NiceReply\Services;

use Nestak\NiceReply\Client;
use Nestak\NiceReply\Resources\Users\Users;

class User extends Service
{

	public Users $users;

	public function __construct(Client $client)
	{
		parent::__construct($client);

		$this->users = new Users(
			$this,
			[
				'actions' => [
					'list' => [
						'path'       => 'users',
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
						'path'       => 'users/{ID}',
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
