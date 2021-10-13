<?php

namespace App\Services;

use Nestak\NiceReply\Client;
use Nestak\NiceReply\Services\Rating;
use Nestak\NiceReply\Services\Survey;
use Nestak\NiceReply\Services\User;

class NiceReplyService
{
    private Client $client;
    private Survey $survey;
    private User $user;
    private Rating $rating;

    public function __construct()
    {
        $this->client = new Client([
            'username' => env('NICEREPLY_USERNAME'),
            'password' => env('NICEREPLY_PASSWORD')
        ]);
    }

    public function survey()
    {
        if (!isset($this->survey)) {
            $this->survey = new Survey($this->client);
        }
        return $this->survey;
    }

    public function user()
    {
        if (!isset($this->user)) {
            $this->user = new User($this->client);
        }
        return $this->user;
    }

    public function rating()
    {
        if (!isset($this->rating)) {
            $this->rating = new Rating($this->client);
        }
        return $this->rating;
    }
}
