@extends('blog.template.layout')

@section('titulo')
<h2>UNIDAD I: FUNDAMENTOS DE LA ARQUITECTURA CLIENTE - SERVIDOR</h2>
@endsection

@section('topic')

<!--TEMA 1-->
<div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Conceptos de sistemas de información.</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                  <p class="title-un-des">Un sistema de información es un conjunto de elementos que interactúan entre sí con el fin de apoyar las actividades de una empresa o negocio. 
                     <br>Los sistemas de información ayudan a administrar, recolectar, recuperar, procesar, almacenar y distribuir información relevante para los procesos fundamentales y las particularidades de cada organización.
                  </p>
               </div>
            </div>
            <div class="row services-box-margin">
               <ul id="myTab" class="nav services-tabs ">
                  <li class="active">
                     <a href="#FirstTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp">
                           <div class="service-icon">
                              <i class="fa ion-ios-paperplane-outline"></i>
                           </div>
                           <div class="service-info">
                              <h5>Servicios</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#SecoundTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                           <div class="service-icon">
                              <i class="fa ion-ios-shuffle"></i>
                           </div>
                           <div class="service-info">
                              <h5>Recursos compartidos</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#ThirdTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                           <div class="service-icon">
                              <i class="fa ion-ios-game-controller-b-outline"></i>
                           </div>
                           <div class="service-info">
                              <h5>Protocolos asimétricos</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#FourTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                           <div class="service-icon">
                              <i class="fa  ion-ios-monitor-outline"></i>
                           </div>
                           <div class="service-info">
                              <h5>Independencia de ubicación</h5>
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>
               <div id="myTabContent" class=" tab-content service-tab-content">
                  <div class="tab-pane fade  active in" id="FirstTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                             CARACTERÍSTICAS DE LA ARQUITECTURA
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p> 
                           Los servidores (o programas que proporcionan servicios) son objetos separados desde un punto de vista lógico y que se comunican a través de una red de comunicaciones para realizar una o varias tareas de forma conjunta.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="SecoundTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                              CARACTERÍSTICAS DE LA ARQUITECTURA 
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p> Un servidor puede proporcionar servicios a muchos clientes al mismo tiempo, y regular el acceso de éstos a un conjunto de recursos compartidos </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="ThirdTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                              CARACTERÍSTICAS DE LA ARQUITECTURA
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p>Hay una relación muchos a uno entre los clientes y un servidor. Los clientes siempre inician un diálogo mediante la solicitud de un servicio. Los Servidores esperan pasivamente por las solicitudes de los clientes. </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="FourTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                              CARACTERÍSTICAS DE LA ARQUITECTURA 
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p>el software cliente/servidor “ideal” es independiente del hardware o sistemas operativos, permitiendo al programador mezclar plataformas de clientes y servidores </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Service item -->

<!--TEMA 2-->
       <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Evolución de los sistemas de información</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-time-outline"></i></div>
                  <p class="title-un-des">Un sistema de información es una combinación de procesos, hardware, personal capacitado, software, infraestructura y estándares que están diseñados para crear, modificar, almacenar, administrar y distribuir información para sugerir nuevas estrategias comerciales y nuevos productos.</p>
                  <ul class="blog-posts-g">
                     <li>
                        
                        <div class="post-img">
                           <a>
                              <img src="images/post-1.jpg" alt="Meet the New UI Design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a> Procesamiento de datos electrónicos  </a></h5>
                           <div class="post-info"><span> 1950 </span>/<span><a> 1960 </a></span></div>
                           <p>
                           Durante este período, el papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones, el mantenimiento de registros y la contabilidad. SI se utilizó principalmente para el procesamiento electrónico de datos.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a>
                              <img src="images/post-2.jpg" alt="A LOOK INSIDE THE Workspace">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5> <a> Sistemas de información gerencial </a></h5>
                           <div class="post-info"><span> 1960 </span>/<span><a> 1970 </a></span></div>
                           <p>
                           Durante esta era, el rol de SI evolucionó desde TPS hasta Management Information Systems (MSI) o Sistemas de información gerenciales. MSI procesa los datos en informes informativos útiles y proporciona a los gerentes las herramientas para organizar evaluar y administrar de manera eficiente los departamentos dentro de una organización. 
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a>
                              <img src="images/post-3.jpg" alt="Inspiration of UX design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a> Sistemas de soporte de decisiones </a></h5>
                           <div class="post-info"><span>1970</span>/<span><a> 1980 </a></span></div>
                           <p>
                           En esta era, un avance importante fue la introducción de las computadoras personales (PC). Con la introducción de las PC, se produjo la distribución de la potencia informática o de procesamiento en toda la organización. La función de SI está fuertemente asociada con la administración en lugar de un enfoque técnico en una organización.
                           </p>
                        </div>
                     </li>
                  </ul>
                  <ul class="blog-posts-g">
                     <li>
                        
                        <div class="post-img">
                           <a>
                              <img src="images/post-4.jpg" alt="Meet the New UI Design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a> Sistemas de información ejecutivo  </a></h5>
                           <div class="post-info"><span>1980</span>/<span><a href="#"> 1990</a></span></div>
                           <p>
                           Este período dio lugar a la informática departamental debido a que muchas organizaciones compran su propio hardware y software para satisfacer sus necesidades departamentales. En lugar de esperar el apoyo indirecto del departamento de servicio corporativo centralizado, los empleados podrían usar sus propios recursos para respaldar sus requisitos laborales.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a>
                              <img src="images/post-5.jpg" alt="A LOOK INSIDE THE Workspace">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5> <a> Sistemas de gestión del conocimiento </a></h5>
                           <div class="post-info"><span> 1990 </span>/<span><a href="#"> 2000 </a></span></div>
                           <p>
                           Durante esta era, el rápido crecimiento de las intranets, extranets, internet y otras redes globales interconectadas cambiaron drásticamente las capacidades de SI en los negocios. Se hizo posible circular el conocimiento a diferentes partes del mundo independientemente del tiempo y el espacio.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a>
                              <img src="images/post-6.jpg" alt="Inspiration of UX design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a> E-Business </a></h5>
                           <div class="post-info"><span>2000</span>/<span><a href="#"> Actualidad</a></span></div>
                           <p>
                           Internet y las tecnologías y aplicaciones relacionadas cambiaron la forma en que operan las empresas y las personas trabajan. Las funciones de los sistemas de información en este período siguen siendo las mismas que hace 50 años: mantenimiento de registros, gestión de informes, procesamiento de transacciones, gestión de soporte y procesos de gestión de la organización.
                           </p>
                        </div>
                     </li>
                  </ul>
                  <!--<div class="align-center"> <a class="button" href="#">See More Posts</a> </div>-->
               </div>
            </div>
         </div>
      </div>
      <!-- End Blog Section -->
<!--TEMA 3-->
      <div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Cliente - Servidor.</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                  <p class="title-un-des">Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="post-img">
         <a>
            <img src="images/post-7.jpg" alt="Inspiration of UX design">
         </a>
      </div>

<!--TEMA 4-->
      <div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Computadoras centrales y dedicadas</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                  <p class="title-un-des">Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.
                  </p>
   	            <p>
                  Computadora central: También conocida como mainframe, es una computadora grande, potente y costosa, usada principalmente por una gran compañía para el procesamiento de una gran cantidad de datos
                  <br>
                  Computadoras dedicadas: Esta es la era en la que cada servicio empleaba su propia computadora que permitía que los usuarios de ese servicio se conectaran directamente. Esto es consecuencia de la aparición de computadoras pequeñas, de fácil uso, más baratas y más poderosas de las convencionales.
                  </p>
               </div>
            </div>
         </div>
      </div>

<!--TEMA 6-->
      <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Conexión libre y através de redes</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-time-outline"></i></div>
                  <ul class="blog-posts-g">
                     <li>
                        
                        <div class="post-img">
                           <a>
                              <img src="images/post-8.jpg" alt="Meet the New UI Design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a> Conexión libre  </a></h5>
                           <div class="post-info"><span>  </span>/<span><a>  </a></span></div>
                           <p>
                           Hace más de 10 años que las computadoras escritorio aparecieron de manera masiva. Esto permitió que parte apreciable de la carga de trabajo de cómputo tanto en el ámbito de cálculo como en el ámbito de la presentación se lleven a cabo desde el escritorio del usuario. En muchos de los casos el usuario obtiene la información que necesita de alguna computadora de servicio.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a>
                              <img src="images/post-9.jpg" alt="A LOOK INSIDE THE Workspace">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5> <a> Conexión de cómputo a través de redes </a></h5>
                           <div class="post-info"><span>  </span>/<span><a>  </a></span></div>
                           <p>
                           Esta es la era que esta basada en el concepto de redes de computadoras, en la que la información reside en una o varias computadoras, los usuarios de esta información hacen uso de computadoras para laborar y todas ellas se encuentran conectadas entre si.
                           </p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>   
      </div>

<!--TEMA 7-->
      <div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Sistemas con arquitectura  Cliente/Servidor .</h3>
                     <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                        <p>
                        Arquitectura Cliente servidor. Esta arquitectura consiste básicamente en un cliente que realiza peticiones a otro programa (el servidor) que le da respuesta. 
                        <br>
                        Aunque esta idea se puede aplicar a programas que se ejecutan sobre una sola computadora es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.
                        </p>
               </div>
            </div>
         </div>
      </div>

      <!-- TEMA 8-->
      <div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Protocolos de comunicación en red</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                  <p class="title-un-des">Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y recibidos.
                  </p>
               </div>
            </div>
         </div>
      </div>

<!-- TEMA 9-->
         
      <div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Clasificación de los SI de acuerdo a su arquitectura</h3>
                     <div class="title-un-icon"><i class="fa ion-ios-time-outline"></i></div>
      <tr>
         <table>
               <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripción</th>
               </tr>

               <tr>
                  <td id="td1">Sistemas transaccionales</td>
                  <td>Son Sistemas de Información que logran la automatización de procesos operativos dentro de una organización ya que su función primordial consiste en procesar transacciones tales como pagos, cobros, entradas, salidas, etc.</td>
               </tr>

               <tr>
                  <td id="td1">Sistemas estratégicos</td>
                  <td>Son sistemas de información desarrollado en las organizaciones con el fin de lograr ventajas competitivas, a través del uso de la tecnología de información.</td>
               </tr>

               <tr>
                  <td id="td1">Manuales</td>
                  <td>cuando el hombre auxiliado por cierto equipo (máquinas de escribir, sumadoras, archivos, etc.) realiza las principales funciones de recopilación, registro, almacenamiento, cálculo y generación de información.</td>
               </tr>

               <tr>
                  <td id="td1">Mecanizados</td>
                  <td>cuando cierta maquinaria realiza las principales funciones de procesamiento. Para los sistemas mecanizados que hacen uso de un computador, de acuerdo al tipo de interacción Hombre-Máquina, los sistemas de información pueden ser de dos tipos</td>
               </tr>

               <tr>
                  <td id="td1">Procesos centralizados</td>
                  <td>los recursos se encuentran ubicados en un área física determinada, por lo que su acceso se realiza en las misma instalación o desde lugares retirados, mediante líneas de comunicación de datos (telefónicas, microondas, satélite, etc.).</td>
               </tr>

               <tr>
                  <td id="td1">Proceso distribuido</td>
                  <td>los recursos se encuentran diseminados en diversos lugares de una zona territorial, por lo que el procesamiento se realiza en el propio lugar donde se originan los datos, existiendo la posibilidad de compartir información entre las diversas instalaciones.</td>
               </tr>
            </table>
      </tr>
               </div>
            </div>
         </div>
      </div>


<style>
table {
   margin:auto;
}
</style>

@endsection


