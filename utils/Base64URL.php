<?php
namespace utils\Base64URL;

class Base64URL {
	    public function base64_encode_url($data) 
	    {
	    	return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
		}

		public function base64_decode_url($data) 
		{
	    	return base64_decode(strtr($data, '-_', '+/'));
		}
	}
?>