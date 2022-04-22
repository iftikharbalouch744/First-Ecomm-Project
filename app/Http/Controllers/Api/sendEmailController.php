<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\FallowupEmail;
use App\Http\Controllers\Controller;

class sendEmailController extends Controller
{
    public function inviteuseremail()
    {
        dd('hy');
        $user = User::select('email')->get();
        $enrollmentData = [
            'Title' => 'Fallowup Emails',
            'body' => 'You Received an new test notification',
            'enrollemttext' => 'You are allowed to Enrollment',
            'url' => url('/'),
            'thankyou' => 'You have 10 days to enrollment'
        ];

        Notification::send($user, new FallowupEmail($enrollmentData));

        dd('emails done');
    }
}
