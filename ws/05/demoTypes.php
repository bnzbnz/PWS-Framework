<?php

// !!! '_' underscore in Names is FORBIDDEN !!!

/******************************************/
/*         REQUESTS / RESPONSES	       		*/
/* extends RequestType / ResponseType */			
/******************************************/


class GetTimeRequestType extends RequestType
{	
	public static function WS_Properties()
	{
		return array();
	} 	
}

class GetTimeResponseType extends ResponseType
{	
	public $DateTime;
	public $DemoArray;
	
	public static function WS_Properties()
	{
		return 
			array(
				"DateTime"				=> array
				(
					"type"				=> "datetime",
					"acllevel"			=> 0
				),
				"DemoArray"				=> array
				(
					"type"				=> "IntArrayContainerType",
					"acllevel"			=> 0
				)				
			);
	} 	
}


?>
