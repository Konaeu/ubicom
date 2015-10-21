<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Courseware extends Eloquent{
	protected $table='courseware';
	public $timestamps = true;
	protected $guarded=[];

	public function course(){//函数名可以随意定义
		return $this->belongsTo('Courses','course_id');////第二项指定关联键的命名,'course_id'
	}

	protected function getDateFormat()
    {
        return 'U';
    }
}