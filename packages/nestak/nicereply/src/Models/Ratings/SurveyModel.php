<?php

namespace Nestak\NiceReply\Models\Ratings;

use Nestak\NiceReply\Models\Model;

class SurveyModel extends Model
{
    public ?int $id = null;
    public string $metric = '';
}
