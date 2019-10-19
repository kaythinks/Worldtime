# Kaythinks/Worldtime

# This PHP Library helps you get the accurate time for any Global city

There are presently 4 static methods namely;

- getTime(string $input)
	--This method returns the time in 12-hour Format

- getFullTime(string $input)
	--This method returns the time in 24-hour Format

- getTimeString(string $input)
	--This method returns the time as a string in 12-hour Format

- getFullTimeString(string $input)
	--This method returns the time as a string in 24-hour Format

To install this package follow the steps below

-- Run composer require kaythinks/worldtime

-- Run composer dump-autoload

-- The library can be used this way for example;

    <?php

	require_once 'vendor/autoload.php';

	use Kaythinks\Worldtime\Worldtime;

	echo Worldtime::getTime('Lagos');


