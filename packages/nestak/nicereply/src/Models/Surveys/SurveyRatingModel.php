<?php

namespace Nestak\NiceReply\Models\Surveys;

use Nestak\NiceReply\Collections\Surveys\ExtraQuestionsCollection;
use Nestak\NiceReply\Models\RatingLinksModel;
use Nestak\NiceReply\Models\Model;

class SurveyRatingModel extends Model
{
	public string $id = '';
	public string $metric = '';
}
