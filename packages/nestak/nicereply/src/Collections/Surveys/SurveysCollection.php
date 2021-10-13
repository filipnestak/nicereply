<?php

namespace Nestak\NiceReply\Collections\Surveys;

use Nestak\NiceReply\Collections\Collection;
use Nestak\NiceReply\Models\Surveys\SurveyModel;

class SurveysCollection extends Collection
{
	protected string $mainModel = SurveyModel::class;

}