<?php

namespace Lucas\App\Model;

class Card{
    private string $question;
    private string $answer;

    public function __construct(string $question,string $answer)
    {
        $this->question = $question;
        $this->answer = $answer;

    }


    /**
     * Get the value of question
     *
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @param string $question
     *
     * @return self
     */
    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of answer
     *
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }

    /**
     * Set the value of answer
     *
     * @param string $answer
     *
     * @return self
     */
    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }
}