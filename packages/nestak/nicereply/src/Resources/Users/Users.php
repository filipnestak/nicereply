<?php

namespace Nestak\NiceReply\Resources\Users;

use Nestak\NiceReply\Collections\Users\UsersCollection;
use Nestak\NiceReply\Models\Users\UserModel;
use Nestak\NiceReply\Resources\Resource;

class Users extends Resource
{
    /**
     * @throws \Nestak\NiceReply\NiceReplyException
     */
    public function list($parameters = [])
    {
        return $this->makeAction('list', $parameters, UsersCollection::class);
    }

    /**
     * @throws \Nestak\NiceReply\NiceReplyException
     */
    public function show($customerId)
    {
        return $this->makeAction('show', ['ID' => $customerId], UserModel::class);
    }
}
