<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Notices extends Eloquent{
	protected $table='notices';
	public $timestamps = false;
	protected $guarded=[];


}