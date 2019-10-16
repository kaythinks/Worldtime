<?php

namespace Worldtime;

require_once __DIR__ . './../../vendor/autoload.php';

use Worldtime\Cities;

class Worldtime extends Cities{

	/**
	 * This method returns the time in 12-hour Format
	 * 
	 * @param  string $input 
	 * @return date         
	 */
	public static function getTime(string $input)
	{
		Worldtime::getTimeZone($input);

		return date("h:i:sA");
	}

	/**
	 * This method returns the time in 24-hour Format
	 * 
	 * @param  string $input 
	 * @return date         
	 */
	public static function getFullTime(string $input)
	{
		Worldtime::getTimeZone($input);

		return date("H:i:sA");
	}

	/**
	 * This method returns the time in 12-hour Format
	 * 
	 * @param  string $input 
	 * @return string         
	 */
	public static function getTimeString(string $input)
	{
		Worldtime::getTimeZone($input);

		return date("l, d-M-y h:i:sA T");
	}

	/**
	 * This method returns the time in 24-hour Format
	 * 
	 * @param  string $input 
	 * @return string        
	 */
	public static function getFullTimeString(string $input)
	{
		Worldtime::getTimeZone($input);

		return date("l, d-M-y H:i:sA T");
	}
}


