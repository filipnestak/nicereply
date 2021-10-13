<?php

namespace Nestak\NiceReply\Models\Surveys;

use Nestak\NiceReply\Models\Model;

class ExtraQuestionModel extends Model
{
	public string $id = '';
	public string $label = '';
	public string $rating_scale = '';
	public string $required = '';
}