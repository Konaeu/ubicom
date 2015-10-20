<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Notices extends Eloquent{
	protected $table='notices';
	//protected $timestamps = true;
	protected $guarded=[];

	protected function getDateFormat()
    {
        return 'U';
    }
}