<?php

namespace Worldtime;

class Cities{

	/**
	 * This method compares the input with available array of cities.
	 * 
	 * @param  string $input
	 * @return Response
	 */
	public static function compareCity(string $input)
	{
		$cities = [
			'Africa/Abidjan' => 'Abidjan',	'Africa/Accra'=> 'Accra',	'Africa/Addis_Ababa'=> 'Addis_Ababa',	'Africa/Algiers'=> 'Algiers',	'Africa/Asmara'=> 'Asmara',
			'Africa/Asmera' => 'Asmera',	'Africa/Bamako'=> 'Bamako',	'Africa/Bangui'=> 'Bangui',	'Africa/Banjul'=>'Banjul',	'Africa/Bissau'=> 'Bissau',
			'Africa/Blantyre'=> 'Blantyre',	'Africa/Brazzaville'=> 'Brazzaville',	'Africa/Bujumbura'=> 'Bujumbura',	'Africa/Cairo'=> 'Cairo',	'Africa/Casablanca'=> 'Casablanca',
			'Africa/Ceuta'=> 'Ceuta',	'Africa/Conakry'=> 'Conakry',	'Africa/Dakar'=> 'Dakar',	'Africa/Dar_es_Salaam'=> 'Dar_es_Salaam',	'Africa/Djibouti'=> 'Djibouti',
			'Africa/Douala'=> 'Douala',	'Africa/El_Aaiun'=> 'El_Aaiun',	'Africa/Freetown'=> 'Freetown',	'Africa/Gaborone'=> 'Gaborone',	'Africa/Harare'=> 'Harare',
			'Africa/Johannesburg'=> 'Johannesburg',	'Africa/Juba'=> 'Juba',	'Africa/Kampala'=> 'Kampala','Africa/Khartoum'=> 'Khartoum',	'Africa/Kigali'=> 'Kigali',
			'Africa/Kinshasa'=> 'Kinshasa',	'Africa/Lagos'=> 'Lagos',	'Africa/Libreville'=> 'Libreville',	'Africa/Lome'=> 'Lome',	'Africa/Luanda'=> 'Luanda',
			'Africa/Lubumbashi'=> 'Lubumbashi',	'Africa/Lusaka'=> 'Lusaka',	'Africa/Malabo'=> 'Malabo',	'Africa/Maputo'=> 'Maputo',	'Africa/Maseru'=> 'Maseru',
			'Africa/Mbabane'=> 'Mbabane',	'Africa/Mogadishu'=> 'Mogadishu',	'Africa/Monrovia'=> 'Monrovia',	'Africa/Nairobi'=> 'Nairobi', 'Africa/Ndjamena'=> 'Ndjamena',
			'Africa/Niamey'=> 'Niamey',	'Africa/Nouakchott'=> 'Nouakchott',	'Africa/Ouagadougou'=> 'Ouagadougou',	'Africa/Porto-Novo'=> 'Porto-Novo',	'Africa/Sao_Tome'=> 'Sao_Tome',
			'Africa/Timbuktu'=> 'Timbuktu',	'Africa/Tripoli'=> 'Tripoli',	'Africa/Tunis'=> 'Tunis',	'Africa/Windhoek'=> 'Windhoek'
		];

		$response = array_search($input, $cities);

		if (!$response) {
			return false;
		}

		return $response;
	}

	/**
	 * This method tries to set the default time zone for a particular input
	 * 
	 * @param  string $input
	 * @return Response
	 */
	public static function getTimeZone(string $input)
	{
		//Replace empty space with underscore
		$input = preg_replace('/\s+/', '_', $input);

		$input = ucfirst($input);

		$response = Cities::compareCity($input);

		if (!$response) {
			$resp = "<b>".$input."</b> is not a World city or it's non-existent !!!<br>";
			print_r($resp);
			die();
		}

		$data = date_default_timezone_set($response);

		return $data;
	}
}