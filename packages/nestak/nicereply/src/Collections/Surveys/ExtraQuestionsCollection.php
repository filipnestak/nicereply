<?php

namespace Nestak\NiceReply\Collections\Surveys;

use Nestak\NiceReply\Collections\Collection;
use Nestak\NiceReply\Models\Surveys\ExtraQuestionModel;

class ExtraQuestionsCollection extends Collection
{
	protected string $mainModel = ExtraQuestionModel::class;
	protected string $collectionName = 'extra_questions';
}
