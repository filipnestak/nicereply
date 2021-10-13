<?php

namespace Nestak\NiceReply\Collections\Users;

use Nestak\NiceReply\Collections\Collection;
use Nestak\NiceReply\Models\Users\IntegrationUsernameModel;
use Nestak\NiceReply\Models\Users\UserModel;

class IntegrationUsernamesCollection extends Collection
{
	protected string $mainModel = IntegrationUsernameModel::class;
}