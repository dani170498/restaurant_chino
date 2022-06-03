const formulario = document.getElementById('form-empleado');
const inputs = document.querySelectorAll('#form-empleado input')
const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,50}$/, // Letras y espacios, pueden llevar acentos.
	rol:/^[a-zA-ZÀ-ÿ\s]{1,20}$/, // letras y espacios
	cinit: /^\d{5,16}$/, // 7 a 14 numeros.	
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	contraseña: /^.{4,16}$/, // 4 a 20 digitos.
}



const validarFormulario =(e) =>{
	switch(e.target.name){

		case "nombreempleado":

		validarCampo(expresiones.nombre, e.target, 'nombre')

		break;
		
		

		case "rolempleado":
			validarCampo(expresiones.rol, e.target, 'rol')

		break;		
		case "cinitempleado":
			validarCampo(expresiones.cinit, e.target, 'cinit')

		break;		
		case "correoempleado":
			validarCampo(expresiones.correo, e.target, 'correo')

		break;		
		case "contraempleado":
			validarCampo(expresiones.contraseña, e.target, 'contraseña')

		break;		

		

	}

}

const campos={
	nombre:false,
	rol:false,
	cinit:false,
	correo:false,
	contraseña:false,
}


const validarCampo =(expresion, input, campo)=>{

	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');					
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__grupo-input-error`).classList.remove('formulario__grupo-input-error-activo');

		campos[campo]= true;

	}
	else{
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');					
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__grupo-input-error`).classList.add('formulario__grupo-input-error-activo');
	
		campos[campo]=false;
	}

}

inputs.forEach((input)=> {
input.addEventListener('keyup', validarFormulario);
input.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', (e)=>{
	e.preventDefault();

	if(campos.nombre && campos.rol && campos.cinit && campos.correo && campos.contraseña){

		formulario.reset();
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');	
		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono)=>{
			icono.classList.remove('formulario__grupo-correcto');

		})
	
	}
})