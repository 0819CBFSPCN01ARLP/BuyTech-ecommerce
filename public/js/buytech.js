// function validarRegistro(){
//   let nombre = document.forms["registro"]["nombre"];
//   let apellido = document.forms["registro"]["apellido"];
//   let email = document.forms["registro"]["email"];
//   let password = document.forms["registro"]["password"];
//   let password = document.forms["registro"]["password_confirmation"];
//
// }
let botonCompra = document.getElementById('compraGuest');
botonCompra.onclick = function (evt){
  evt.preventDefault()
  vex.dialog.open({
    message: 'Necesitas loguearte para realizar esta compra',
    input: [
      'Podes <a href="/login"> ingresar </a> o <a href="/register"> crear una cuenta </a>'
      //     '<input name="username" type="text" placeholder="Username" required />',
      //     '<input name="password" type="password" placeholder="Password" required />'
    ].join(''),
    buttons: [
      // $.extend({}, vex.dialog.buttons.YES, { text: '' }),
      // $.extend({}, vex.dialog.buttons.NO, { text: '' })
    ],
    callback: function (data) {
      if (!data) {
        console.log('Cancelled')
      } else {
        console.log('Username', data.username, 'Password', data.password)
      }
    }
  })
}
