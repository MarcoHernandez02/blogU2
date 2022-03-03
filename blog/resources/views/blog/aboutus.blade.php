@extends('blog.template.layout')
@section('titulo')

<h1>SOBRE NOSOTROS</h1>

@endsection

@section('aboutus')

<!-- About Section -->
<div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Sobre Nosotros </h3>
                  <div class="title-un-icon"><i class="fa ion-ios-flame-outline"></i></div>
                  <p class="title-un-des">¿Quieres conocer más acerca de nosotros? 
                     <br>
                     Aquí te lo presentamos
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp">
                     <div class="service-img">
                        <img src="images/sas.jpg" alt="Enfold">
                     </div>
                     <div class="service-info">
                        <h5>ESTEFANÍA CHAVEZ</h5>
                        <div class="desc">
                        Soy Estefania Chávez García, actualmente tengo 19 años de edad estudiante de la Universidad Politécnica de Tecámac cursando la carrera de Ingenieria en Software soy una alumna promedio y  comprometida.
                           <a class="see-more" href="#">
                        See More &rarr;
                        <div class="line"></div>
                      </a>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp" data-wow-delay=".2s">
                     <div class="service-img">
                        <img src="images/sasa.jpg" alt="Enfold">
                     </div>
                     <div class="service-info">
                        <h5>MARCO HERNÁNDEZ</h5>
                        <div class="desc">
                           Hola, tengo 20 años, actualmente estudiante universitario, con mucha ilusión de aprender más acerca de las increíbles herramientas que están a nuestro alcance para programar.
                           <a class="see-more" href="#">
                        See More &rarr;
                        <div class="line"></div>
                      </a>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                     <div class="service-img">
                        <img src="images/sasaa.jpg" alt="Enfold">
                     </div>
                     <div class="service-info">
                        <h5>NUESTRA INSTITUCIÓN</h5>
                        <div class="desc">
                           La Universidad Politécnica de Tecámac, institución en la cual adquirimos las bases escenciales para el aprendizaje. 
                           <a class="see-more" href="#">See More &rarr;<div class="line"></div></a>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
            </div>
         </div>
      </div>
      <!-- End About Section -->

@endsection