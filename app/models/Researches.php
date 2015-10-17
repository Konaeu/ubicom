<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Researches extends Eloquent{
	protected $table='researches';
	public $timestamps = true;
	protected $guarded=[];
	protected function getDateFormat()
    {
        return 'U';
    }
}