<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Courses extends Eloquent{
	protected $table='courses';
	//public $timestamps = true;
	protected $guarded=[];

	public function comments(){//函数名可以随意定义
		return $this->hasMany('Comments','course_id');//第二项指定关联键的命名,'course_id'
	}

	public function homework(){
		return $this->hasMany('Homework','course_id');
	}

	public function courseware(){
		return $this->hasMany('Courseware','course_id');
	}
	protected function getDateFormat()
    {
        return 'U';
    }
}