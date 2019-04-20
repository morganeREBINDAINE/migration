<?php

class Devinette
{
  private $id;
  private $name;
  private $question;
  private $answer;
  private $created_at;

  public function getId() {
    return $this->id;
  }
  public function getName() {
    return $this->name;
  }
  public function getQuestion() {
    return $this->question;
  }
  public function getAnswer() {
    return $this->answer;
  }
  public function getCreated_at() {
    return $this->created_at;
  }

  // public function setId($id) {
  //   $this->id = $id;
  // }
  // public function setName($name) {
  //   $this->name = $name;
  // }
  // public function setQuestion($question) {
  //   $this->question = $question;
  // }
  // public function setAnswer($answer) {
  //   $this->answer = $answer;
  // }
  // public function setCreated_at($date) {
  //   $this->created_at = $date;
  // }
}
