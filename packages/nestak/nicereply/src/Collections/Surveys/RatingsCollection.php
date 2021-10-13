<?php

namespace Nestak\NiceReply\Collections\Surveys;

use Nestak\NiceReply\Collections\Collection;
use Nestak\NiceReply\Models\Surveys\RatingModel;

class RatingsCollection extends Collection
{
	protected string $mainModel = RatingModel::class;

}