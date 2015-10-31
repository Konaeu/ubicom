<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Homework extends Eloquent{
	protected $table='homework';
	public $timestamps = false;
	protected $guarded=[];

	public function course(){
		return $this->belongsTo('Courses','course_id');//
	}


}