<?php

namespace App\Http\Controllers;

use App\Http\Requests\RatingRequest;
use App\Services\NiceReplyService;
use Nestak\NiceReply\Models\Ratings\RatingCreateModel;
use Nestak\NiceReply\Models\Ratings\UserModel;
use Nestak\NiceReply\NiceReplyException;

class RatingController extends Controller
{
    private NiceReplyService $niceReplyService;

    public function __construct(NiceReplyService $niceReplyService)
    {
        $this->niceReplyService = $niceReplyService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surveys = $this->niceReplyService->survey()->surveys->list()->get();
        $users = $this->niceReplyService->user()->users->list()->get();
        return view('rating.create', compact('surveys', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RatingRequest $request)
    {
        $data = $request->validated();
        $model = new RatingCreateModel();
        $user = new UserModel();
        $user->setId($data['user']);

        $model->setSurveyId($data['survey_id']);
        $model->setScore($data['score']);
        $model->setComment($data['comment']);
        $model->setUser($user);
        try {
            $this->niceReplyService->rating()->ratings->create($model);
        } catch (NiceReplyException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->back()->with('success','Successfully added rating');
    }
}
