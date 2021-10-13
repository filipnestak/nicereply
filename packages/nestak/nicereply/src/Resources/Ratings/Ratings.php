<?php

namespace Nestak\NiceReply\Resources\Ratings;

use Nestak\NiceReply\Models\Ratings\RatingCreateModel;
use Nestak\NiceReply\Models\Ratings\RatingModel;
use Nestak\NiceReply\NiceReplyException;
use Nestak\NiceReply\Resources\Resource;

class Ratings extends Resource
{
    /**
     * @throws NiceReplyException
     */
    public function create(RatingCreateModel $body)
    {
        if (isset($body->user->id)) {
            unset($body->user->username);
        } else if ($body->user->username) {
            unset($body->user->id);
        }
        $parameters = [
            'body' => $body
        ];
        return $this->makeAction('create', $parameters, RatingModel::class);
    }
}
