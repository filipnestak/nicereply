<?php

namespace Nestak\NiceReply\Resources\Surveys;

use Nestak\NiceReply\Collections\Surveys\RatingsCollection;
use Nestak\NiceReply\Resources\Resource;

class Ratings extends Resource
{

    /**
     * @throws \Nestak\NiceReply\NiceReplyException
     */
    public function list($surveyId)
	{
		return $this->makeAction('list', ['ID' => $surveyId], RatingsCollection::class);
	}
}
