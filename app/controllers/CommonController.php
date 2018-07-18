<?php 

class CommonController extends BasicController {

	public static function index()
	{
	    Flight::renderSmarty('index.html');
		return FALSE;#Stop Route
	}
	
}
