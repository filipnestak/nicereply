<?php

namespace Nestak\NiceReply\Models\Surveys;

use Nestak\NiceReply\Collections\Surveys\ExtraQuestionsCollection;
use Nestak\NiceReply\Models\Model;

class SurveyModel extends Model
{
	public string $id = '';
	public string $name = '';
	public string $metric = '';
	public string $distribution = '';
	public string $rating_scale = '';
	public string $question = '';
	public ?ExtraQuestionsCollection $extra_questions = null;
	public ?LinksModel $_links = null;
}
