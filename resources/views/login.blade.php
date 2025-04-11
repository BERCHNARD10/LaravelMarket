<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>¡Hola! Inicia Sesion &#128512;</title>
</head>
<body>
    <header class="header" id="login">
        <i class="logo">
            <img src="./images/logo.svg" alt="">
        </i>
    </header>
    
    <main class="container">
        <div class="image-login">
            <div class="content">
                <h3>El Mejor Chocolate de Mexico</h3>
            </div>
        </div>

        <form id="formulario" class="form-style" action="./Modelo/loginModelo.php" method="post" name="form1" id="form1" >
            <div class="text-form">
                <h3>Bienvenido!</h3>
                <p>llena los campos para iniciar Sesion</p>
            </div>
            <div class="user-date-ext">
                <div class="input" id="input_usuario">
                    <div class="group-input">
                        <i class="fas fa-user"></i>
                        <input  placeholder="Nombre de Usuario*" type="text" id="usuario" name="usuario">    
                    </div>
                    <p class="input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                </div>
                <div class="input" id="input_correo">
                    <div class="group-input">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Correo electronico*" type="email" id="correo" name="correo" required>
                    </div>
                    <p class="input-error">Usa el formato nombre@ejemplo.com.</p>
                </div>
                <div class="input" id="input_password">
                    <div class="group-input">
                        <i class="fas fa-key"></i>
                        <input placeholder="Crear una Contraseña*" type="password" id="password" name="password" required>
                        <i  class="fas fa-eye" id="password-eye" name="password-eye" onclick="verPassword()"></i>
                    </div>
                    <div class="input-error">
                        <p>
                            La contraseña debe de tener el siguiente formato                       
                            <ul class=".input-error" style="    display: flex; flex-direction: column; padding-left: 2rem;;">
                                <li>Minimo 8 caracteres </li>
                                <li>Maximo 15 </li>
                                <li>Al menos una letra mayúscula</li>
                                <li>Al menos una letra minucula</li>
                                <li>Al menos un dígito</li>
                                <li>No espacios en blanco</li>
                                <li>Al menos 1 caracter especial</li>
                            </ol>
                        </p>
                    </div>
                </div>
                <a href="./restablecerpassword.php">¿Olvidaste Tu contraseña?</a>
               
            </div>
            <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
            <div class="input-btn">
                <input class="btn" type="submit" id="btnregistrar" value="Login" >
                <p class="mensaje-exito" id="mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
            <div class="input" id="iniciarsesion">
                <div class="group-input">
                    <a href="">¿Ya tienes cuenta?... iniciar Sesion</a>                
                </div>
            </div>
        </form>
    </main>
    <script src="../js/formulario.js"></script>
</body>
</html>