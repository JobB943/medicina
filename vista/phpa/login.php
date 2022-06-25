<?php include("config.php");?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css\styles.css">
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="full">
                    <a class="logo" href="file:///C:/Users/crist/Documents/spicyo/index.html"><img src="images/logo.png" alt="#"></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="full">
                    <div class="right_header_info">
                        <ul>
                            <li class="dinone">contactos: <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">300-3648-795</a></li>
                            <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">Nosotros@misena.edu.co</a></li>
                            <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 Medellín , Colombia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				
				<h3>Iniciar sección</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
<form method="post" action="validar.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Correo">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="psw" placeholder="Contraseña">
					</div>
                    <button type="submit" placeholder="Entrar" class="btn btn-primary">Entrar</button>
				</form></div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="">Olvidaste la contraseña?</a>
					&nbsp;&nbsp;&nbsp;
					<a href="index.html">volver al inicio</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>