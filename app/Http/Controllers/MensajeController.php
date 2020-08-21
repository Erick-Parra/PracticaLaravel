<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
	public function store(Request $request)
	{
	 $message = request()->validate([
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'content' => 'required|min:5'
		]);

		//Enviar el email
		Mail::To('parraerick22@gmail.com')->queue(new MessageReceived($message));


		return 'Email enviado';

	}
}
    //

