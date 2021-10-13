<?php

namespace Nestak\NiceReply\Models\Ratings;

use Nestak\NiceReply\Models\Model;

class RatingCreateModel extends Model
{
	public ?int $survey_id = null;
	public string $score = '';
	public string $from = '';
	public string $comment = '';
	public string $ticket = '';
	public ?UserModel $user = null;
	public ?int $customer_id = null;
	public string $ip_address = '';
	public ?ExtraQuestionModel $extra_questions = null;

	/**
	 * @return UserModel|null
	 */
	public function getUser(): ?UserModel
	{
		return $this->user;
	}

	/**
	 * @param UserModel|null $user
	 */
	public function setUser(?UserModel $user): void
	{
		$this->user = $user;
	}

	/**
	 * @return int
	 */
	public function getSurveyId(): int
	{
		return $this->survey_id;
	}

	/**
	 * @param int $survey_id
	 */
	public function setSurveyId(int $survey_id): void
	{
		$this->survey_id = $survey_id;
	}

	/**
	 * @return string
	 */
	public function getScore(): string
	{
		return $this->score;
	}

	/**
	 * @param string $score
	 */
	public function setScore(string $score): void
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
	 * @return int
	 */
	public function getCustomerId(): int
	{
		return $this->customer_id;
	}

	/**
	 * @param int $customer_id
	 */
	public function setCustomerId(int $customer_id): void
	{
		$this->customer_id = $customer_id;
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
