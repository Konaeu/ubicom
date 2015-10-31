<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Comments extends Eloquent{
	protected $table='comments';
	public $timestamps = false;
	protected $guarded=[];

	public function course(){
		return $this->belongsTo('Courses','course_id');//
	}


    public function freshTimestamp() {
    	return time();
  	}
}