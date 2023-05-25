<?php

/**
 * 
 */
class Users
{
	function get_users()
	{
		$response = [];
		$response[] = [
			'user_id' => 1,
			'user_name' => "Rino",
		];
		$response[] = [
			'user_id' => 2,
			'user_name' => "Rino",
		];
		return $response;
	}
}
