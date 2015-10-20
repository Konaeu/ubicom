<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Comments extends Eloquent{
	protected $table='comments';
	//protected $timestamps = true;
	protected $guarded=[];

	public function course(){
		return $this->belongsTo('Courses','course_id');//
	}

	protected function getDateFormat()
    {
        return 'U';
    }
}