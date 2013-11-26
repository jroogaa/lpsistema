<?php

class UsuarioController extends BaseController {

	

	public function validar_login()
	{
		 	$usu=Input::get('username');
			$cla=Input::get('password');

	if($user = Usuario::where('usuario', '=', $usu)->first())
			{
				if($cla == $user->password)
				{
					Session::put('id_usuario', $user->id_usuario);
					Session::put('usuario', $user->usuario);
					return Redirect::to('/dentro');
				}
				else
				{
					return Redirect::to('/afuera');
				}
			}
			else
			{
				return Redirect::to('/afuera');

			}

	}

	public function salir_login()
	{
		Session::flush();
		return Redirect::to('http://localhost/lpsistema/public/login');
	}

	public function error_login()
	{
		return View::make('login.afuera');


	}
	public function dentro_login()
	{
		//return View::make('login.dentro');
		return View::make('Portal.inicio');
	}
	

}