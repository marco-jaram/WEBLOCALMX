<?php
$password = "weblocalcanvas2022";
if ($_POST['password'] != $password) {
?>
<style>
.contenedor {
   max-width: 1000px;
   width: 100%;
   margin: 0 auto;
   text-align: center;
  margin-top: 80px;
}
h1
{
   text-align: center;
   color: #11b28e;
}
h2{
   color: grey;
}
input{
   margin: 5px;
   
}

</style>
<div class="contenedor">
<h1>MODELO DE NEGOCIOS CANVAS</h1>
<h2>Introduce la clave de acceso</h2>
<form name="form" method="post" action="">
   <input type="password" name="password"><br>
   <input id="boton-enviar" type="submit" value="Entrar">

</form>


</div>
<?php
}else{
?>
 
 <!--inicia html  -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W4HGS8R');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=»robots» content=»noindex»>

    <title>App Canvas modelo de negocio</title>
    <link rel="icon" type="image/png" href="img-landing-canvas/favicon-weblocal.png">
    <link rel="stylesheet" href="/apps-weblocal/css/app-canvas.css">

</head>

<body>
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4HGS8R"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="barra">
        <div class="logo contenedor"> <i>Weblocalmx</i></div>
    </div>
    <div class="contenedor">
    <h1>MODELO DE NEGOCIOS CANVAS</h1>
        <h1>APP PROPUESTA DE VALOR</h1>
        <div class="img-app-canvas-hader"></div>
        <p>Para mayor comodidad utiliza una tableta, laptop o desktop.</p>
        <p>Si aun no tienes la propuesta de valor te tengo una buena noticia. Tengo una aplicación similar a ésta y
            ¡también es gratis!. Entra a <a href="https://weblocalmx.com/apps-weblocal/app-propuesta-de-valor.php">Propuesta de valor</a> con la clave: propuestadevalor2022</p>
        <br>
        <p> <strong>Instrucciones</strong> : contesta el cuestionario con la mayor cantidad de respuestas. Carga las
            respuestas dándole al botón "cargar respuestas" y luego al botón "generara pdf" y descárgalo.</p>
        <p>Espero te sea de mucha utilidad. &#128513;</p>
    </div>

    <br><br>





    <!-- formulario de respuestas -->
    <div class="contenedor">
        <form id="formulario">
            <h4>0. Nombre de proyecto</h4>
            <span> &#9187; </span> <input type="text" name="name-nombre-proyecto"
                id="respuesta-nombre-proyecto"><br><br>
            <br>
            <h4>1. Segmentacion de clientes</h4>
            <p>¿A quién va dirigido? <br>


                <span>1 </span><input type="text" name="name-propuesta1" id="respuesta-segmentacion1"><br>
                <span>2 </span><input type="text" name="name-propuesta2" id="respuesta-segmentacion2">
            </p>
            <br><br>



            <h4>2. Propuesta de valor</h4>
            <p>¿De qué va mi negocio, cuál es el beneficio principal? <br>


                <span>1 </span><input type="text" name="name-respuesta-propuesta1" id="respuesta-propuesta1"><br>
            </p>

            <br><br>

            <h4>3. Canales</h4>
            <p>Medio que utilizas para que el cliente conozca tu servicio y lo compre. <br>

                <span>1 </span><input type="text" name="name-canales1" id="respuesta-canes1"><br>
                <span>2 </span><input type="text" name="name-canales2" id="respuesta-canes2"><br>
                <span>3 </span><input type="text" name="name-canales3" id="respuesta-canes3"><br>
                <span>4 </span><input type="text" name="name-canales4" id="respuesta-canes4"><br>
                <span>5 </span><input type="text" name="name-canales5" id="respuesta-canes5">
            </p>
            <br><br>
            <h4>4. Relacion con clientes</h4>
            <p>A parte de cumplir con lo que ofreces, vas a... <br>

                <span>1 </span><input type="text" name="name-relacion1" id="respuesta-relacion-clientes1"><br>
                <span>2 </span><input type="text" name="name-relacion2" id="respuesta-relacion-clientes2"><br>
                <span>3 </span><input type="text" name="name-relacion3" id="respuesta-relacion-clientes3"><br>
                <span>4 </span><input type="text" name="name-relacion4" id="respuesta-relacion-clientes4"><br>
                <span>5 </span><input type="text" name="name-relacion5" id="respuesta-relacion-clientes5">
            </p>
            <br><br>
            <h4>5. Fuente de ingresos</h4>
            <p>Es lógico que venderás, ¿pero más allá de eso qué nos brindará ingresos? <br>

                <span>1 </span><input type="text" name="nameingreso1" id="respuesta-ingresos1"><br>
                <span>2 </span><input type="text" name="nameingreso2" id="respuesta-ingresos2"><br>
                <span>3 </span><input type="text" name="nameingreso3" id="respuesta-ingresos3"><br>
                <span>4 </span><input type="text" name="nameingreso4" id="respuesta-ingresos4"><br>
                <span>5 </span><input type="text" name="nameingreso5" id="respuesta-ingresos5">
            </p>
            <br><br>
            <h4>6. Recursos clave</h4>
            <p>Anota los Recursos Claves para tener un negocio de éxito.Herramientas fisicas y digitales. Web,
                programas, etc. <br>

                <span>1 </span><input type="text" name="name-recurso1" id="respuesta-recursos1"><br>
                <span>2 </span><input type="text" name="name-recurso2" id="respuesta-recursos2"><br>
                <span>3 </span><input type="text" name="name-recurso3" id="respuesta-recursos3"><br>
                <span>4 </span><input type="text" name="name-recurso4" id="respuesta-recursos4"><br>
                <span>5 </span><input type="text" name="name-recurso5" id="respuesta-recursos5">
            </p>
            <br><br>
            <h4>7. Actividades</h4>
            <p>¿Qué tienes que hacer para cumplir con tus objetivos y propuesta de valor? <br>

                <span>1 </span><input type="text" name="name-ctividades1" id="respuesta-actividades1"><br>
                <span>2 </span><input type="text" name="name-ctividades2" id="respuesta-actividades2"><br>
                <span>3 </span><input type="text" name="name-ctividades3" id="respuesta-actividades3"><br>
                <span>4 </span><input type="text" name="name-ctividades4" id="respuesta-actividades4"><br>
                <span>5 </span><input type="text" name="name-ctividades5" id="respuesta-actividades5">
            </p>
            <br><br>
            <h4>8. Colaboradores</h4>
            <p>¿Cuáles son las alianzas necesarias para poder ejecutar el negocio? Diseñador, copywritting, etc. <br>


                <span>1 </span><input type="text" name="name'colaboradores1" id="respuesta-colaboradores1"><br>
                <span>2 </span><input type="text" name="name'colaboradores2" id="respuesta-colaboradores2"><br>
                <span>3 </span><input type="text" name="name'colaboradores3" id="respuesta-colaboradores3"><br>
                <span>4 </span><input type="text" name="name'colaboradores4" id="respuesta-colaboradores4"><br>
                <span>5 </span><input type="text" name="name'colaboradores5" id="respuesta-colaboradores5">
            </p>
            <br><br>
            <h4>9. Estructura de costes</h4>
            <p>¿Cuánto cuesta lo esencial para tener éxito? <br>

                <span>1 </span><input type="text" name="name costes1" id="respuesta-costes1"><br>
                <span>2 </span><input type="text" name="name costes2" id="respuesta-costes2"><br>
                <span>3 </span><input type="text" name="name costes3" id="respuesta-costes3"><br>
                <span>4 </span><input type="text" name="name costes4" id="respuesta-costes4"><br>
                <span>5 </span><input type="text" name="name costes5" id="respuesta-costes5">
            </p>

            <button type="submit">CARGAR RESPUESTAS EN CANVAS</button>
            <div class="mensaje-carga"></div>
            <button onclick="javascript:window.print()"> GENERA PDF</button>
        </form>
    </div>
    <br><br><br>
    <!--  RESPUESTAS LIENZO CON RECUADROS -->
    <div class="contenedor-canvas-resultados">
        <h2>Resultado:</h2>
        <div class="contenido-imprimir">
            <h3 id="nombre-del-proyecto">Nombre del proyecto</h3>

            <div class="tg-wrap">
                <table class="tg">
                    <thead>
                        <tr>
                            <th class="tg-0lax" rowspan="2">8. Colaboradores <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-colaboradores.png" alt="">
                                <ol class="colaboradores">
                                    <li class="colaboradores-1" id="colaboradores1"></li>
                                    <li class="colaboradores-2" id="colaboradores2"></li>
                                    <li class="colaboradores-3" id="colaboradores3"></li>
                                    <li class="colaboradores-4" id="colaboradores4"></li>
                                    <li class="colaboradores-5" id="colaboradores5"></li>
                                </ol>
                            </th>
                            <th class="tg-0lax">7. Actividades <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-actividades.png" alt="">
                                <ol class="actividades">
                                    <li class="actividades-1" id="actividades1"></li>
                                    <li class="actividades-2" id="actividades2"></li>
                                    <li class="actividades-3" id="actividades3"></li>
                                    <li class="actividades-4" id="actividades4"></li>
                                    <li class="actividades-5" id="actividades5"></li>
                                </ol>
                            </th>
                            <th class="tg-0lax" rowspan="3">2. Propuesta de valor <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-valor.png" alt="">
                                <ol class="propuesta-de-valor">
                                    <li class="propuesta-de-valor-1" id="propuesta-de-valor1"></li>


                                </ol>
                            </th>
                            <th class="tg-0lax">4. Relacion con clientes <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-cavas-relacion-cliente-amigo-consulting.png"
                                    alt="">
                                <ol class="relacion-clientes">
                                    <li class="relacion-clientes-1" id="relacion-clientes1"></li>
                                    <li class="relacion-clientes-2" id="relacion-clientes2"></li>
                                    <li class="relacion-clientes-3" id="relacion-clientes3"></li>
                                    <li class="relacion-clientes-4" id="relacion-clientes4"></li>
                                    <li class="relacion-clientes-5" id="relacion-clientes5"></li>
                                </ol>
                            </th>
                            <th class="tg-0lax" rowspan="2">1. Segmentacion de clientes <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-segmento-target.png" alt="">
                                <ol class="segmentacion">
                                    <li class="segmentacion-1" id="segmentacion1"></li>
                                    <li class="segmentacion-2" id="segmentacion2"></li>

                                </ol>
                            </th>
                        </tr>
                        <tr>
                            <td class="tg-0lax">6. Recursos clave<br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-recursos-clave.png" alt="">
                                <ol class="recursos">
                                    <li class="recursos-1" id="recursos1"></li>
                                    <li class="recursos-2" id="recursos2"></li>
                                    <li class="recursos-3" id="recursos3"></li>
                                    <li class="recursos-4" id="recursos4"></li>
                                    <li class="recursos-5" id="recursos5"></li>
                                </ol>
                            </td>
                            <td class="tg-0lax">3. Canales <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-canales.png" alt="">
                                <ol class="canales">
                                    <li class="canales-1" id="canales1"></li>
                                    <li class="canales-2" id="canales2"></li>
                                    <li class="canales-3" id="canales3"></li>
                                    <li class="canales-4" id="canales4"></li>
                                    <li class="canales-5" id="canales5"></li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0lax" colspan="2">9. Estructura de costes <br><img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-costes.png" alt="">
                                <ol class="costes">
                                    <li class="costes-1" id="costes1"></li>
                                    <li class="costes-2" id="costes2"></li>
                                    <li class="costes-3" id="costes3"></li>
                                    <li class="costes-4" id="costes4"></li>
                                    <li class="costes-5" id="costes5"></li>
                                </ol>
                            </td>
                            <td class="tg-0lax" colspan="2">5. Fuente de ingresos <br> <img
                                    src="/apps-weblocal/img-landing-canvas/icono-canvas-ingresos.png" alt="">
                                <ol class="fuente-ingresos">
                                    <li class="fuente-ingresos-1" id="fuente-ingresos1"></li>
                                    <li class="fuente-ingresos-2" id="fuente-ingresos2"></li>
                                    <li class="fuente-ingresos-3" id="fuente-ingresos3"></li>
                                    <li class="fuente-ingresos-4" id="fuente-ingresos4"></li>
                                    <li class="fuente-ingresos-5" id="fuente-ingresos5"></li>
                                </ol>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>


        </div>
    </div>
    <div class="contenedor">
        <button onclick="javascript:window.print()"> GENERA PDF Y DESCARGA</button>
    </div>


    <footer>

        <div class="contenido-footer">
            <span class="contenedor">Creado por Marco Jaramillo / 2021
            </span>
        </div>
    </footer>




    <script src="/apps-weblocal/js/app-convas.js"></script>
    <script src="/apps-weblocal/js/imprimePDF.js"></script>
</body>

</html>

 <!-- termina html -->
<?php
   }
   ?>