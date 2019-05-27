<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Quienes Somos - La Historia del Apellido</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
        <meta name="Googlebot" content="all" />
        <meta name="ROBOTS" content="all" />
        <meta name="DISTRIBUTION" content="Global" />
		<link href="https://fonts.googleapis.com/css?family=Pirata+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/propio.css" media="screen,handheld">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen,handheld">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen,handheld">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" media="screen,handheld">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="screen,handheld">
	</head>
	<body>
<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">La Historia del Apellido</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Quiénes Somos</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="regalosemp.html">Regalos Empresariales</a></li>
                    <li class="active"><a href="contactenos.html">Contáctenos</a></li>
                </ul>
            </div>
    </nav>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contactenos<i class="fa fa-paper-plane-o"></i></h2>
                </div>
            </div>
            <div class="row">
                <form method="post" action="contact.php" name="contactform" id="contactform">
                    <div class="col-md-6">
                        <fieldset>
                            <input name="nombre" type="text" id="nombre"placeholder="Nombre" required>
                            <br>
                            <input name="apellido" type="text" id="apellido"placeholder="Apellido" required>
                            <br>
                            <input name="email" type="text" id="email"placeholder="Email" required>
                            <br>
                            <input name="telefono" type="text" id="telefono"placeholder="Teléfono" required>
                            <br>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <textarea name="mensaje" cols="40" rows="20" id="comments" placeholder="Mensaje"></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <button type="submit" class="btn btn-lg" id="submit" value="Submit">Enviar Mensaje</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        <?php
            $destino="licdanielcalvo@gmail.com";
            $remite="From:<Historia del Apellido>licdanielcalvo@gmail.com";
            $asunto="Contacto desde La Historia del Apellido";
            $mensaje="Nombre: ".$_POST['nombre']."\n";
            $mensaje="Apellido: ".$_POST['apellido']."\n";
            $mensaje="E-mail: ".$_POST['email']."\n";
            $mensaje="Telefono: ".$_POST['telefono']."\n";
            $mensaje="Mensaje: ".$_POST['mensaje']."\n";
            
            
            if (isset($_POST['nombre']) or isset($_POST['email'])){
                mail($destino,$asunto,$mensaje);
                echo "<p class=\"lapdephp\">Tu mensaje fue enviado con éxito, nos pondremos en contacto con usted en la brevedad</p>";
            }
        ?>
        </div>
    </section>
    <div class="row">
                <div class="col-sm-6 col-md-6 col-xs-12 cajaja2">
                    <h3>Páginas</h3>
                    <br>
                    <ul class="listado">
                        <hr>
                        <li class="active"><a href="index.html">Quiénes Somos</a></li>
                        <hr>
                        <li><a href="productos.html">Productos</a></li>
                        <hr>
                        <li><a href="regalosemp.html">Regalos Empresariales</a></li>
                        <hr>
                        <li><a href="contactenos.html">Contáctenos</a></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12 cajaja2">
                    <h3>Contacto</h3>
                    <p><span class="glyphicon glyphicon-user dibu"></span>
                    Lic. Daniel Calvo<br></p>
                    <p><span class="glyphicon glyphicon-earphone dibu"></span>
                    4823-1227<br></p>
                    <p><span class="fa fa-whatsapp dibu"></span>
                    +54 9 11 5809-6246<br></p>
                    <p><span class="glyphicon glyphicon-envelope dibu"></span>licdanielcalvo@gmail.com<br></p>
                    <ul>
                        <li class="pull-right sociale">
                        <a href="https://www.facebook.com">
                        <img src="imag/face.png" class="soc">
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/5fcb813317.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99182412-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>

