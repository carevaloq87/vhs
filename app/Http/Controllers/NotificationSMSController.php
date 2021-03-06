<?php

namespace App\Http\Controllers;


require base_path().'/vendor/autoload.php';
use App\Http\Controllers\Controller;
use Aloha\Twilio\Twilio;
use App\User as User;
use Aloha\Twilio\TwilioInterface;
use Twilio\Rest\Client;
use Autoload;
use Log;
use App\Models\AccountDetails;

class NotificationSMSController extends Controller
{
    //
	protected $message;



	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
     * Test the name of the command
     */
	public function letterNotificationSMS($user, $id)
	{
		$user = AccountDetails::where('id', $id)->first();
		$user_mobile = $user->mobile;

		$this->sendMessage(
			$user,
			$user_mobile,
			'You have a new letter in the Housing Services Victoria Portal. Please log into your account to access your mail.'
			);
	}

	private function sendMessage($user, $user_mobile, $messageBody)
	{
		$account_sid = env('TWILIO_SID', '');
		$auth_token = env('TWILIO_TOKEN', '');
		$fromNumber = env('TWILIO_FROM', '');
		$MessagingServiceSid = env('TWILIO_MessagingServiceSid', '');
		$client = new Twilio($account_sid, $auth_token, $fromNumber);

		$messageParams = array(
			'Body' => $messageBody
			);

		try {
			$messages = $client->message(
				$user_mobile,
				$messageParams
				);
		} catch (Exception $e) {
			Log::error($e->getMessage());
		}

		return;
	}

}
