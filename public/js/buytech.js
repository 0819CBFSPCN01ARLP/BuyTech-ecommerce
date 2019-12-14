// function validarRegistro(){
//   let nombre = document.forms["registro"]["nombre"];
//   let apellido = document.forms["registro"]["apellido"];
//   let email = document.forms["registro"]["email"];
//   let password = document.forms["registro"]["password"];
//   let password = document.forms["registro"]["password_confirmation"];
//
// }

let botonCompra = document.getElementById('compraGuest');
if(botonCompra){
  botonCompra.onclick = function (evt){
    evt.preventDefault()
    vex.dialog.open({
      message: 'Necesitas loguearte para realizar esta compra',
      input: [
        'Podes <a href="/login"> ingresar </a> o <a href="/register"> crear una cuenta </a>'
      ].join(''),
      buttons: [
        // $.extend({}, vex.dialog.buttons.YES, { text: '' }),
        // $.extend({}, vex.dialog.buttons.NO, { text: '' })
      ]
    })
  }
}




let masSeis = document.getElementById('masSeis');
console.log(masSeis)
masSeis.onchange = function (evt){
  if(masSeis.options[masSeis.selectedIndex].value == '6'){
    document.getElementById('textomasseis').classList.remove('d-none');
  } else {
    document.getElementById('textomasseis').classList.add('d-none');
  }
}
