<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use App\Models\User;
use App\Notifications\ResetPasswordNotification;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    protected $redirectTo = '/';

    
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, '¡El correo de recuperación ha sido enviado! Por favor, verifica tu bandeja de entrada para seguir las instrucciones.')
                    : $this->sendResetLinkFailedResponse($request, 'Error inesperado, intente de nuevo más tarde');
    }

    use SendsPasswordResetEmails;
}
