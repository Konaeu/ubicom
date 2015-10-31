<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class News extends Eloquent{
	protected $table='news';
	public $timestamps = false;
	protected $guarded=[];

    public function freshTimestamp() {
    	return time();
  	}
}