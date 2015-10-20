<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class News extends Eloquent{
	protected $table='news';
	//public $timestamps = true;
	protected $guarded=[];
	protected function getDateFormat()
    {
        return 'U';
    }
}