<?php

namespace Nestak\NiceReply\Models\Users;

use Nestak\NiceReply\Collections\Users\IntegrationUsernamesCollection;
use Nestak\NiceReply\Models\Model;

class UserModel extends Model
{
	public string $id = '';
	public string $type = '';
	public string $has_access = '';
	public string $is_archived = '';
	public string $username = '';
	public ?IntegrationUsernamesCollection $integration_usernames = null;
	public string $fullname = '';
	public string $email = '';
	public string $role = '';
	public string $created_at = '';
	public ?LinksModel $_links = null;
}
