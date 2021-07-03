<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    //

public function store(Request $request)
{
// return $request;
// return $request->get('email');
	request()->validate([
		'name' => 'required',
		'email' => ['required', 'email'],
		'subject' => 'required',
		'mensaje' => 'required'

	]);
	return 'DATOS';
// return request('email');
	# code...
}
}
