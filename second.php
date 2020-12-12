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
              $con=conexion();
              $sql="";
              $resultado;
              if(isset($_POST['login']))
              {
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND correo='$email'";
              }
              else{
                $sql = "SELECT * FROM usuarios";
              }
                $resultado = mysqli_query($con,$sql);
                $renglon = mysqli_num_rows($resultado);
               
                if($renglon>=1){?>
                <a href="agregar.php" class="button is-success"style="position:relative; left:400px; top:10px;">Agregar usuario</a>
                    <table class="table">
                    <tr>
                        <td colspan="5">Resultados de BD</td>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Login</td>
                        <td>Acciones</td>
                    </tr>
                    <?php
                    $result = mysqli_query($con,"select * from usuarios");
                    while($row = mysqli_fetch_array($result)){  ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["nombre"];?></td>
                        <td><?php echo $row["correo"];?></td>
                        <td><?php echo $row["login"];?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $row["id"];?>"class="button is-success"> Editar</a>
                            <a href="delete.php?id=<?php echo $row["id"];?>" class="button is-danger">Borrar</a>
                            
                        </td>
                        
                    </tr>
                    <?php
                } ?>
                <?php
                }else{?>

                    <p class="title is-1">Control de usuario</p>
                    <p class="title is-3">El usuario no existe</p>
                    <a href="index.php" class="button is-success">Regresar</a>
                  <?php  
                }
              ?>
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