<!DOCTYPE HTML>
<html>
<head>
	<title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
<body>
	<section class="hero is-primary">
	    <div class="hero-body">
	        <div class="container">
	          <h1 class="title">Universidad de Colima</h1>
	          <h2 class="subtitle">Facultad de Telemática</h2>
        	</div>
      	</div>
    </section>

<!-- Cuerpo del documento -->
    <div class="container">
            <div class="columns is-centered">
                <div class="column is-three-fifths is-offset-one-fifth"> 
                    <?php include("conexion.php");
                        if(isset($_POST["crear"]))
                        {
                            $nombre=$_POST['nombre'];
                            $login=$_POST['login'];
                            $contra=$_POST['contra'];
                            $email=$_POST['email'];
                            $con=conexion();
                            $sql="INSERT INTO usuarios (nombre, login, password, correo) VALUES ('$nombre', '$login', '$contra', '$email')";
                            $resultado = mysqli_query($con,$sql);
                            header("location:second.php");
                        }
                    
                    ?>
                    <form name="frmdatos" action="" method="POST">
                    <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <div class="columns">
                            <div class="column is-three-fifths">
                                <input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith">
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="field">
                    <label class="label">Login</label>
                    <div class="control">
                        <div class="columns">
                            <div class="column is-three-fifths">
                                <input class="input" type="text" id="login" name="login" placeholder="e.g Alex Smith">
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control">
                        <div class="columns">
                            <div class="column is-three-fifths">
                                <input class="input" type="text" id="contra" name="contra" placeholder="e.g Alex Smith">
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                    <input class="input" type="email" id="email" name="email" placeholder="e.g. alexsmith@gmail.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    

				    <div class="control">
                        <button id="crear" name="crear" class="button is-success">&nbsp;Enviar datos&nbsp;</button>
                    </div>
                </form>
                </div>
            </div>
    </div>
    
    <!-- pié de página -->
    <footer class="footer-padding"  style="position:relative; top:400px;" >
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Ana Aguilar</a>. 
        </p>
      </div>
    </footer>
</body>
</html>