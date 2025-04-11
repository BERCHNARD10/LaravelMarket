const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@$!%*?&])([A-Za-z\d#$@$!%*?&]|[^ ]){8,15}$/ 
	/* Minimo 8 caracteres 
	Maximo 15 
	Al menos una letra mayúscula 
	Al menos una letra minucula
	Al menos un dígito
	No espacios en blanco
	Al menos 1 caracter especial*/
}

const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellidos":
			validarCampo(expresiones.nombre, e.target, 'apellidos');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value))
	{
		document.getElementById(`input_${campo}`).classList.remove('input-incorrecto');
		document.getElementById(`input_${campo}`).classList.add('input-correcto');
		document.querySelector(`#input_${campo} .input-error`).classList.remove('input-error-activo');
		campos[campo] = true;
	}
	else {
		document.getElementById(`input_${campo}`).classList.add('input-incorrecto');
		document.getElementById(`input_${campo}`).classList.remove('.input-correcto');
		document.querySelector(`#input_${campo} .input-error`).classList.add('input-error-activo');
		document.querySelector(`#input_${campo} .input-error`).classList.add('input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`input_password2`).classList.add('input-incorrecto');
		document.getElementById(`input_password2`).classList.remove('input-correcto');
		document.querySelector(`#input_password2 .input-error`).classList.add('input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`input_password2`).classList.remove('input-incorrecto');
		document.getElementById(`input_password2`).classList.add('.input-correcto');
		document.querySelector(`#input_password2 .input-error`).classList.remove('input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault(); //que no te envie los datos

	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});
function hideOrShowPassword() {
	var password1, password2, check;
  
	password1 = document.getElementById("password");
	password2 = document.getElementById("password2");
	check = document.getElementById("password-eye");
  
	if ( password1.type == "password") // Si la checkbox de mostrar contraseña está activada
	{
	  password1.type = "text";
	  password2.type = "text";
	} else // Si no está activada 
	{
	  password1.type = "password";
	  password2.type = "password";
	}
  }