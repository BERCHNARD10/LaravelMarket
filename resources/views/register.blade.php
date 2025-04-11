<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>¡Hola! Crea tu Cuenta &#128512;</title>
</head>
<body>
    <header class="header" id="login">
        <i class="logo">
            <img src="../images/logo.svg" alt="">
        </i>
    </header>
    
    <main class="container">
        <div class="image-login">
                <div class="content">
                    <h3>El Mejor Chocolate de Mexico</h3>
                </div>
        </div>

        <form id="formulario" class="form-style">
            <div class="text-form">
                <h3>Bienvenido!</h3>
                <p>llena los campos para crearte una Cuenta</p>
            </div>
            <div class="info">
                <div class="input" id="input_usuario">
                    <div class="group-input">
                        <i class="fas fa-user"></i>
                        <input  placeholder="Nombre de Usuario*" type="text" id="usuario" name="usuario">    
                    </div>
                    <p class="input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                </div>
                <div class="input" id="input_nombre">
                    <div class="group-input">
                        <i class="fas fa-user"></i>
                        <input placeholder="Nombre(s)*" type="text" id="nombre" name="nombre">
                    </div>
                    <p class="input-error">Solo puede contener letras.</p>
                </div>
                <div class="input" id="input_apellidos">
                    <div class="group-input">
                        <div class="fas fa-user"></div>
                        <input placeholder="Apellidos(s)*" type="text" id="apellidos" name="apellidos">
                    </div>
                    <p class="input-error">Solo puede contener letras.</p>
                </div>
                <div class="input" id="input_telefono">
                    <div class="group-input">
                        <i class="fas fa-phone"></i>
                        <input placeholder="Numero de Telefono" type="number" id="telefono" name="telefono" minlength="10">
                    </div>
                    <p class="input-error">El telefono solo puede contener numeros y el maximo son 10 dígitos.</p>
                </div>
            </div>
            <div class="user-date-ext">
                <div class="input" id="input_correo">
                    <div class="group-input">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Correo electronico*" type="email" id="correo" name="correo">
                    </div>
                    <p class="input-error">Usa el formato nombre@ejemplo.com.</p>
                </div>
                <div class="input" id="input_password">
                    <div class="group-input">
                        <i class="fas fa-key"></i>
                        <input placeholder="Crear una Contraseña*" type="password" id="password" name="password">
                        <button type="checkbox" class="fas fa-eye" id="password-eye" name="password-eye" onclick="hideOrShowPassword()"></button>
                    </div>
                    <div class="input-error">
                        <p>
                            La contraseña debe de tener el siguiente formato                       
                            <ul class=".input-error" style="display: flex; flex-direction: column; padding-left: 2rem;;">
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
                <div class="input" id="input_password2">
                    <div class="group-input">
                        <i class="fas fa-key"></i>
                        <input placeholder="Confirmar Contraseña*" type="password" id="password2" name="password2">
                    </div>
                    <p class="input-error">Las contraseñas deben ser iguales.</p>
                </div>
                <div class="input" id="input_combo" >
                    <h2><span>Pregunta secreta</span></h2>
                    <div class="group-input">
                        <i class="fas fa-question"></i>
                        <select id="pregunta" name="pregunta" style="width: -webkit-fill-available;"> 
                            <option value="0" selected>Selecciona una Pregunta</option>
                            <option value="value1">¿Cual es la fecha de tu Cumple Años?</option>
                            <option value="value2">¿Cual es el nombre de tu mascota?</option>
                            <option value="value3">¿En qué ciudad naciste?</option>
                        </select>
                    </div>
                    <p class="input-error">Selecciona una Pregunta.</p>
                </div>
                <div class="input" id="input_respuesta">
                    <div class="group-input">
                        <i class="fas fa-file-signature	"></i>
                    <input placeholder="Respuesta*" type="text" id="Respuesta" name="Respuesta">
                    <p class="input-error">Las contraseñas deben ser iguales.</p>
                </div>
            </div>
            <div class="input-btn">
                <input class="btn" type="submit" value="Login">
            </div>
        </form>
    </main>
    <script src="../js/formulario.js"></script>
</body>
</html>