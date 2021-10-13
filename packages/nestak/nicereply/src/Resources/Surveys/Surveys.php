<?php

namespace Nestak\NiceReply\Resources\Surveys;

use Nestak\NiceReply\Collections\Surveys\SurveysCollection;
use Nestak\NiceReply\Models\Surveys\SurveyModel;
use Nestak\NiceReply\Resources\Resource;

class Surveys extends Resource
{

    /**
     * @throws \Nestak\NiceReply\NiceReplyException
     */
    public function list()
    {
        return $this->makeAction('list', [], SurveysCollection::class);
    }

    /**
     * @throws \Nestak\NiceReply\NiceReplyException
     */
    public function show($surveyId)
    {
        return $this->makeAction('show', ['ID' => $surveyId], SurveyModel::class);
    }
}
