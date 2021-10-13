<?php

namespace Nestak\NiceReply\Models\Ratings;

use Nestak\NiceReply\Models\Model;

class RatingModel extends Model
{
    public ?int $id = null;
    public ?int $score = null;
    public string $from = '';
    public string $ip_address = '';
    public string $comment = '';
    public string $created_at = '';
    public string $updated_at = '';
    public string $ticket = '';
    public ?SurveyModel $survey = null;
    public ?int $customer = null;
    public ?UserModel $user = null;
    public ?ExtraQuestionModel $extra_questions = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @param int|null $score
     */
    public function setScore(?int $score): void
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ip_address;
    }

    /**
     * @param string $ip_address
     */
    public function setIpAddress(string $ip_address): void
    {
        $this->ip_address = $ip_address;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return string
     */
    public function getTicket(): string
    {
        return $this->ticket;
    }

    /**
     * @param string $ticket
     */
    public function setTicket(string $ticket): void
    {
        $this->ticket = $ticket;
    }

    /**
     * @return SurveyModel|null
     */
    public function getSurvey(): ?SurveyModel
    {
        return $this->survey;
    }

    /**
     * @param SurveyModel|null $survey
     */
    public function setSurvey(?SurveyModel $survey): void
    {
        $this->survey = $survey;
    }

    /**
     * @return int|null
     */
    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    /**
     * @param int|null $customer
     */
    public function setCustomer(?int $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return int|null
     */
    public function getUser(): ?int
    {
        return $this->user;
    }

    /**
     * @param int|null $user
     */
    public function setUser(?int $user): void
    {
        $this->user = $user;
    }

    /**
     * @return ExtraQuestionModel|null
     */
    public function getExtraQuestions(): ?ExtraQuestionModel
    {
        return $this->extra_questions;
    }

    /**
     * @param ExtraQuestionModel|null $extra_questions
     */
    public function setExtraQuestions(?ExtraQuestionModel $extra_questions): void
    {
        $this->extra_questions = $extra_questions;
    }


}
