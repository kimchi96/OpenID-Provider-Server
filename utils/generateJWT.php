<?php 
use App\MyUsersModel;
use utils\Base64URL;
use Carbon\Carbon;

class generateJWT {
	function __contructor()
	{
		public function generateToken(){
			// get the local secret key
			$authorization  = explode(" ", $authorization);
	        $key = $authorization[1];

			// Create the token header
			$header = [
			    'typ' => 'JWT',
			    'alg' => 'HS256'
			];
			$EncodeHeader = base64_encode_url($header); 

			// Create the token payload
			$user = MyUsersModel::where(['user_id' => $CodeModel->user_id])->first();
			$payload = [
	            "sub"               => $user->user_id,
	            "email"             => $user->email,
	            "name"              => $user->name,
	            "first_name"        => $user->firstname,
	            "last_name"         => $user->lastname,
	            "phone"             => $user->phone,
	            "address"           => $user->address,
	            "aud"               => $CodeModel->client_id,
	            "iss"               => "http://op.com",
	            "iat"               => new IssuedAt(Carbon::now('UTC')),
	            "exp"               => new Expiration(Carbon::now('UTC')->addDays(1))
	        ];
			$EncodePayload = base64_encode_url($payload);

			// Create Signature Hash
			$signature = hash_hmac('sha256', $EncodeHeader . "." . $EncodePayload, $key, true);

			// Encode Signature to Base64Url String
			$EncodeSignature = base64_encode_url($signature);

			// Create JWT
			$jwt = $EncodeHeader . "." . $EncodePayload . "." . $EncodeSignature;
	    }
	}
