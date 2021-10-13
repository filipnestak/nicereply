<?php

namespace Nestak\NiceReply\Collections\Users;

use Nestak\NiceReply\Collections\Collection;
use Nestak\NiceReply\Models\Users\UserModel;

class UsersCollection extends Collection
{
	protected string $mainModel = UserModel::class;
}