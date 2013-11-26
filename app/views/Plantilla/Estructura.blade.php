<!DOCTYPE html>
<html lang="es">
<head>
	<title>
		L.P. Analistas
	</title>
	{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');}}
	{{HTML::script('js/contenidoJS/contenido.js');}}
	{{HTML::style('css/contenidoCSS/contenido.css');}}
</head>
<body>
@section('barrasuperior')

	<div id="top-bar">
		
		<div class="page-full-width cf">

			<ul id="nav" class="fl">
	
				<li class="v-sep">
					<!--<a href="#" class="round button dark ic-left-arrow image-left">Visitar web L.P.</a>-->
					{{HTML::link('#','Visitar web L.P.',array('class'=>'round button dark ic-left-arrow image-left'))}}
				</li>
				<li class="v-sep">
					<a href="#" class="round button dark menu-user image-left">Conectado como : 
					<strong>{{Session::get('usuario');}}</strong></a>
					<ul>
						<li><a href="#">Configuracion Cuenta</a></li>
						<li><a href="#">Contactar Administrador</a></li>
						
						
					</ul> 
				</li>
			
				<li>
					<!--
					<a href="#" class="round button dark menu-email-special image-left">3 new messages</a>
					-->
					{{HTML::link('#','3 mensajes',array('class'=>'round button dark menu-email-special image-left'))}}
				</li>
				<li>
				<!--
				<a href="#" class="round button dark menu-logoff image-left">Log out</a>
					-->
					{{HTML::link('/salirlogin','Salir ..',array('class'=>'round button dark menu-logoff image-left'))}}
				</li>
				
			</ul> <!-- end nav -->

				<!--	
			<form action="#" method="POST" id="search-form" class="fr">
				<fieldset>
					<input type="text" id="search-keyword" class="round button dark ic-search image-right" placeholder="Search..." />
					<input type="hidden" value="SUBMIT" />
				</fieldset>
			</form>
-->
		</div>
	</div>
@show

@section('pestanasusuario')

<div id="header-with-tabs">
	<div class="page-full-width cf">
		<ul id="tabs" class="fl">
			<li>
				<!--
				<a class="active-tab dashboard-tab" href="dashboard.html">Administrador</a>
				-->

				{{HTML::link('/admin','Administrador')}}

			</li>
			<li>
				{{HTML::link('/profesor','Profesor')}}
			</li>
			<li>
				<a href="page-other.html">Alumno</a>
			</li>
		</ul>
		<!--
		<a id="company-branding-small" class="fr" href="#">
			<img alt="Blue Hosting" src="images/company-logo.png">
		</a>

		-->
	</div>
</div>

@show

@section('piepagina')


<div id="footer">
<p>
© Copyright 2013
<a href="#">lpanalistas, S.R.L.</a>
. Todos los derechos reservados.
</p>
<p>
<strong>Administracion</strong>

<a href="http://www.adipurdila.com">L.P.</a>
</p>
</div>

@show





</body>
</html>