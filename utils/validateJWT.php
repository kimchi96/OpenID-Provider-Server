<?php 
use App\MyUsersModel;
use utils\Base64URL;
use Carbon\Carbon;

class validateJWT {
	function __contructor()
	{
		public function verifyJWT(){
			// get the local secret key
			$key = getenv('SECRET');

			if (! isset($argv[1])) {
			    exit('Please provide a key to verify');
			}

			$jwt = $argv[1];

			// split the token
			$tokenParts = explode('.', $jwt);
			$header = base64_decode_url($tokenParts[0]);
			$payload = base64_decode_url($tokenParts[1]);
			$signatureProvided = $tokenParts[2];

			// check the expiration time - note this will cause an error if there is no 'exp' claim in the token
			$expiration = Carbon::createFromTimestamp(json_decode($payload)->exp);
			$tokenExpired = (Carbon::now()->diffInSeconds($expiration, false) < 0);

			// build a signature based on the header and payload using the secret
			$EncodeHeader = base64_encode_url($header); 
			$EncodePayload = base64_encode_url($payload);
			$signature = hash_hmac('sha256', $EncodeHeader . "." . $EncodePayload, $key, true);
			$EncodeSignature = base64_encode_url($signature);

			// verify it matches the signature provided in the token
			$signatureValid = ($EncodeSignature === $signatureProvided);

			echo "Header:\n" . $header . "\n";
			echo "Payload:\n" . $payload . "\n";

			if ($tokenExpired) {
			    echo "Token has expired.\n";
			} else {
			    echo "Token has not expired yet.\n";
			}

			if ($signatureValid) {
			    echo "The signature is valid.\n";
			} else {
			    echo "The signature is NOT valid\n";
			}
		}
	}