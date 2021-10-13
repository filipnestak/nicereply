<?php

namespace App\Http\Controllers;

use App\Services\NiceReplyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Nestak\NiceReply\Client;
use Nestak\NiceReply\Services\User;
use Nestak\NiceReply\Services\Survey;

class SurveyController extends Controller
{

    private NiceReplyService $niceReplyService;

    public function __construct(NiceReplyService $niceReplyService)
    {
        $this->niceReplyService = $niceReplyService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $surveys = Cache::remember('surveysList', 60, function () {
            return $this->niceReplyService->survey()->surveys->list()->get();
        });
        return view('survey.index', compact('surveys'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $survey = Cache::remember('survey-' . $id, 60, function () use ($id) {
            return $this->niceReplyService->survey()->surveys->show($id);
        });
        $ratings = $this->niceReplyService->survey()->ratings->list($id)->get();

        return view('survey.show', compact('ratings', 'survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
