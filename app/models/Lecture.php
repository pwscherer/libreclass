<?php

class Lecture extends \Eloquent {
	protected $table = "Lectures";

  public function getUser() {
    return User::find($this->idUser);
  }

  public function getOffer() {
    return Offer::find($this->idOffer);
  }

	public function offer() {
    return $this->belongsTo('Offer', 'idOffer');
  }

}
