<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>LP Analistas y Consultores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Login de usuarios LP Analistas" />
    <meta name="keywords" content="LP, LP Analistas, Sistema LP, Login, usuarios, lp usuarios" />
    <meta name="author" content="LP Analistas" />

    <link rel="stylesheet" href="css/loginCSS/styleLogin.css">
    <link rel="shortcut icon" type="image/x-icon" href="favi2.ico">
</head>

<body>
    <header>
        <section id="top-bar">
            <a href="http://www.lpanalistas.com/" class="button">
            Home Page LP
            </a>
        </section>
        <h1>
            <section class="login">
                LOGIN DE USUARIO
            </section>
            <a href="http://www.lpanalistas.com/" class="logo">
                <img src="images/lp2.jpg" alt="LP Analistas y Consultores" />
            </a>
        </h1>
    </header>

    <section id="contenido">
        {{Form::open(array('login-form', 'url'=>'/login'))}}
            <!-- <form action="#" method="POST" id="login-form"> -->
                <fieldset>
                    <p>
                        <label for="login-username">DNI</label>
                        <!-- <input  id="username" name="username" type="text" required="required" autofocus /> -->
                        {{Form::text('username','',array('required'=>'required','placeholder'=>'Ingrese DNI'))}}
                    </p>

                    <p>
                        <label for="login-password">Password</label>
                        <!-- <input type="password" id="password" required="required"/> -->
                        {{Form::password('password','',array('required'=>'required','placeholder'=>'Ingrese clave'))}}
                    </p>
                    
                    <p><a href="#">Olvide mi contraseña</a>.</p>
                    
                    <!-- <a href="dashboard.html" class="iniciar button">Iniciar Sesión</a> -->
                     {{Form::submit('Iniciar Sesión', array('class' => 'iniciar button'))}}
                </fieldset>
            <!-- </form> -->
        {{Form::close()}}
    </section>

    <footer>
        <p>&copy; Copyright 2013 </p>
        <p>
            <a href="http://www.lpanalistas.com/">LP Analistas y Consultores.</a>
            Todos los Derechos Reservados.
        </p>
    </footer>

</body>
</html>