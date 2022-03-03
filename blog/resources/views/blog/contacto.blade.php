@extends('blog.template.layout');
@section('titulo')

<h1>CONTACTO</h1>

@endsection


@section('formulario')

<div class="container-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-un">Ponte en contacto con nosotros</h3>
          <div class="title-un-icon"><i class="fa ion-ios-book-outline"></i></div>
            <p class="title-un-des">Envianos un mensaje a nuestro correo en el siguiente formulario: </p>
            <div class="newsletter-container wow fadeInUp">
            </div>
            
      </div>
    </div>
  </div>
</div>

<form action="/my-handling-form-page" method="post">

 <ul>
  <li>
    <label for="name"> Nombre: </label>
    <input placeholder="Tu nombre" type="text" id="name" name="user_name" required="">
  </li>
  <li>
    <label for="mail"> E-mail: </label>
    <input placeholder="@Ejemplo" type="email" id="mail" name="user_mail" required="">
  </li>
  <li>
    <label for="msg"> Mensaje: </label>
    <textarea placeholder="Escribe aquí tu mensaje" id="msg" name="user_message" required=""></textarea>
  </li>
 </ul>
 <li>
    <button type="submit" class="button green-button">Enviar </button>
 </li>
</form>

    <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.9641864678315!2d-98.98036838577708!3d19.714148836727244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ed2fa5d3a6c1%3A0x1f383377175dc58a!2sUniversidad%20Politecnica%20de%20Tecamac!5e0!3m2!1ses!2smx!4v1643592056257!5m2!1ses!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

<style>

form {
  /* Centrar el formulario en la página */
  margin: 0 auto;
  width: 400px;
  /* Esquema del formulario */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Tamaño y alineación uniforme */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* Para asegurarse de que todos los campos de texto tienen la misma configuración de letra
     Por defecto, las áreas de texto tienen un tipo de letra monoespaciada */
  font: 1em sans-serif;

  /* Tamaño uniforme del campo de texto */
  width: 300px;
  box-sizing: border-box;

  /* Hacer coincidir los bordes del campo del formulario */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* Destacado adicional para elementos que tienen el cursor */
  border-color: #000;
}

textarea {
  /* Alinear los campos de texto multilínea con sus etiquetas */
  vertical-align: top;

  /* Proporcionar espacio para escribir texto */
  height: 5em;
}

.button {
  /* Alinear los botones con los campos de texto */
  padding-left: 90px; /* mismo tamaño que los elementos de la etiqueta */
}

button {
  /* Este margen adicional representa aproximadamente el mismo espacio que el espacio
     entre las etiquetas y sus campos de texto */
  margin-left: .5em;
}

</style>

@endsection



