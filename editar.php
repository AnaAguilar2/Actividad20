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
    <?php
      include("conexion.php");
        if(isset($_POST['editar'])){
          $nombre=$_POST['nombre'];
          $login=$_POST['login'];
          $contra=$_POST['contra'];
          $email=$_POST['email'];
          $con=conexion();
          $sql="UPDATE usuarios SET nombre= '$nombre', login='$login', password='$contra', correo='$email' WHERE id='$_POST[id]'";
         
          if(mysqli_query($con,$sql)){
            echo "<script> 
                    alert('Registro modificado con exito!');
                    window.location='second.php';
                  </script>";
        }else{
          echo "<script> 
                    alert('No registrado con exito!');
                </script>";
        }
      } 
    ?>
    <?php
    $con=conexion();
    $sql="";
    if(isset($_GET['id'])){
        $sql="SELECT * FROM usuarios WHERE id=$_GET[id]";
        $resultado = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($resultado);
    
  ?>
 
    <div class="mt-3 mb-4 container">
        <div class="box has-text-justified">
        <form action="" method="POST" class="column is-three-fifths is-offset-one-fifth">
            <div class="field">
            <label class="label">Nombre completo</label>
            <div class="control">
                <input class="input" id="nombre" name="nombre" placeholder="nombre" required type="text" value="<?php echo $row["nombre"];?>">
            </div>
            </div>
            <div class="field">
            <label class="label">Nombre de usuario</label>
            <div class="control">
                <input class="input" id="login" name="login" placeholder="login" required type="text" value="<?php echo $row["login"];?>">
            </div>
            </div>
            <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <input class="input" id="contra" name="contra" placeholder="********" required type="text"  value="<?php echo $row["password"];?>">
            </div>
            </div>
            <div class="field">
            <label class="label">Correo</label>
            <div class="control">
                <input class="input" id="email" name="email" placeholder="@" required type="email"  value="<?php echo $row["correo"];?>">
                <input class="input" id="id" name="id" type="hidden" value="<?php echo $row["id"];?>">
            </div>
            </div>
            <div class="field is-grouped">
            <div class="control">
                <button name="editar" id="editar" class="button is-link">Actualizar</button>
            </div>
            <div class="control">
                <a href="second.php" class="button is-link is-danger">Cancelar</a>
            </div>
            </div>
      </form>
        </div>
    </div>

  <?php } else echo('<script> window.location="/second.php"</script>'); ?>
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


