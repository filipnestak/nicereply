<?php

namespace Nestak\NiceReply\Models\Surveys;

use Nestak\NiceReply\Models\Model;

class RatingModel extends Model
{
	public string $id = '';
	public string $score = '';
	public string $from = '';
	public string $ip_address = '';
	public string $comment = '';
	public string $created_at = '';
	public string $updated_at = '';
	public string $ticket = '';
	public string $customer = '';
	public string $status = '';
	public ?UserModel $user = null;
	public ?SurveyRatingModel $survey = null;
	public ?RatingLinksModel $_links = null;
}
