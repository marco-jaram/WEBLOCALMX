
<?php
$password = "NrJs5uX8fw255ZnEX5";
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
<h1>APP PROPUESTA DE VALOR</h1>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=»robots» content=»noindex»>
    <link rel="stylesheet" href="/apps-weblocal/css/app-propuesta-style.css">
    <link rel="icon" type="image/png" href="img-landing-canvas/favicon-weblocal.png">
    <title>APP Propuesta de Valor</title>
</head>

<body>
    <div class="barra">
        <div class="logo contenedor"> <i>Weblocalmx</i></div>
    </div>
    <section class="titulo-principal contenedor">
        <h1>Aplicación web para obtener la Propuesta de valor de produto o servicio</h1>
        <div class="img-min"></div>
        <div class="img-grande"></div>
        <p>Como podrás ver en el gráfico anterior, la propuesta de valor pertenece al lienzo "canvas" del Plan de
            Negocios. Y te tengo buenas noticias: hice una aplicación para ello y ¿qué crees? <strong>¡También
                es gratuita!</strong> </p>
        <p>Así que cuando termines, entra a <a href="https://weblocalmx.com/apps-weblocal/app-canvas.php">Plan de Negocios Canvas</a>  con esta clave: APsMfnRfbbfwo*G#qG2R</p>
        <p>Por comodidad utiliza una pantalla de laptop o desktop</p>
        <p> <strong>Instrucciones:</strong> </p>
        <ol>
            <li>Contesta cuestionario</li>
            <li>Dale al botón "cargar respuestas"</li>
            <li>Dale al botón "generar pdf" y descarga el gráfico</li>
        </ol>

        <p>Advertencia:</p>
        <p>Dale su tiempo a cada pregunta porque es probable que este cuestionario te haga replantear algunos puntos que
            ya tenias resueltos.
        </p>


        <form id="formulario">
            <h3>1. Nombre del producto o servicio que quieres vender:
            </h3>

            <p> <strong>Ejemplo 1</strong> . Servicio de Fotografías de Boda
                <br> Bodas De Película
                <br><br> <strong>Ejemplo 2</strong> . Curso de nutrición: Si vendes productos físicos puedes poner el
                producto o una categoría de productos. <br> “Dietas de éxito”<br> Si solo es uno repite en las tres
                respuestas
            </p>


            <span> <strong>Tu turno</strong> :</span>
            <br>1<input type="text" id="respuesta-nombre-servicio1">
            <br>2<input type="text" id="respuesta-nombre-servicio2">
            <br>3<input type="text" id="respuesta-nombre-servicio3">

            <br><br>


            <h3>2. ¿Quién es tu cliente potencial?</h3>
            <p>¿A quién va dirigido tu producto o servicio? Puede ser un perfil específico de personas o un sector
            </p>
            <p> <strong>Ejemplo 1</strong> . Servicio de fotografías de boda: <br> El servicio de fotografías de boda va
                dirigido a:
                <br> • Personas que están planeando una boda
                <br> • Personas que esten comprometidas
                <br> • Personas que se van a casar
                <br><br> <strong>Ejemplo 2</strong> : Curso sobre nutrición: Dietas de éxito.
                <br> • El curso de nutrición está dirigida a:
                <br> • Quien esté buscando bajar de peso
                <br> • Quien tenga problemas por mala alimentación
            </p>
            <span> <strong>Tu turno</strong> :</span>
            <br>1<input type="text" id="respuesta-cliente-potencial1">
            <br>2<input type="text" id="respuesta-cliente-potencial2">
            <br>3<input type="text" id="respuesta-cliente-potencial3">
            <br><br>


            <h3>3. Lista los principales puntos de dolor que resuelve el servicio o producto que estás vendiendo.
            </h3>
            <p>Escribe todo lo que tu cliente quiere mejorar. Esos problemas que no le dejan dormir por la noche. Lo que
                le preocupa por encima de todas las cosas. <br> Cuantos más puntos de dolor escribas, mejor. Cuanto más
                dolorosos sean esos puntos, mejor.
                <br> Cualquier servicio o producto resuelve un punto de dolor principal.
                <br> Redacta los puntos de dolor con el lenguaje de tu cliente.
            </p>
            <p> <strong>Ejemplo 1</strong> . Servicio de Fotografías de boda:
                <br> Principal punto de dolor: No tener reportaje fotográfico después de la boda.
                <br> Otros puntos de dolor:
                <br> • El reportaje no muestra todos los momentos de la boda.
                <br> • El fotógrafo sea un bordecon los invitados .
                <br> • Que las fotos no sean lo que espera después de la boda.
                <br> • No tener el reportaje a tiempo.
                <br> • Que las fotos sean de mala calidad.
                <br> •Que el fotógrafo se deje a parte de la los invitados sin fotografiar.
                <br><br> <strong>Ejemplo 2</strong> . Curso de nutrición:
                <br> • Dietas de éxito:
                <br> • Principal punto de dolor: No perder los kilos que le sobran/ sobrepeso
                <br> • Otros puntos de dolor:
                <br> • Seguir comiendo por ansiedad.
                <br> • No poder dejar de comer azúcar.
                <br> • Sentirse a disgusto con su cuerpo.
                <br> • Recuperar el peso perdido con el paso de los meses.
                <br> • No saber planificar su compra “sana” semanal.
                <br> • Tener problemas de salud en el futuro.
                <br> • Sentirse engañado otra vez más con una dieta.
            </p>
            <span> <strong>Tu turno</strong> :</span>
            <br>1<input type="text" id="respuesta-putos-dolor1">
            <br>2<input type="text" id="respuesta-putos-dolor2">
            <br>3<input type="text" id="respuesta-putos-dolor3">

            <br><br>
            <h3>4. Haz un listado con los beneficios que tu producto o servicio aporta a tu cliente.
            </h3>
            <p>Importante: no confundir características de tu servicio o producto con los beneficios. Para cada
                característica hay un beneficio. <br> Tal vez te sirva hacer primero un recuadro con las características
                de tu servicio/producto y el beneficio
                de cada una.
                <br> Redactarlos con un lenguaje que entienda tu cliente.
                <br> Utiliza la fórmula “verbo” + “algo” (Aumentar tranquilidad, reducir estrés).
                <br> Escribe todos los que se te ocurran. Y luego elige tres principales o más importantes.
            </p>
            <p> <strong>Ejemplo 1</strong> . Servicio de Fotografías de boda
                <br> Los beneficios de contratar un fotógrafo de bodas pueden ser:
                <br> • Estar más tranquilo el día de tu boda
                <br> • Ahorrar tiempo por encontrar un fotógrafo que entienda lo que quieres
                <br> • Disminuir las preocupaciones en los preparativos de la boda
                <br> • Aumentar la originalidad del día de tu boda
                <br> • Evitar sorpresas, ya que al conectar con el fotógrafo sabrá lo que buscas
                <br><br> <strong>Ejemplo 2</strong> . Curso sobre nutrición: Dietas de éxito
                <br> Los beneficios de comprar un curso sobre nutrición:
                <br> • Aumentar la autoestima y sentirse más a gusto.
                <br> • Estar más sano.
                <br> • Tener mejor salud.
                <br> • Mejorar su calidad de vida gracias a la alimentación.
                <br> • Ahorrar dinero en el carrito de la compra.
                <br> • Disfrutar más de la comida mientras adelgazas.
                <br> • Vivir más tiempo.
            </p>
            <span> <strong>Tu turno</strong> :</span>
            <br>1<input type="text" id="respuesta-beneficios1">
            <br>2<input type="text" id="respuesta-beneficios2">
            <br>3<input type="text" id="respuesta-beneficios3">


            <br><br>

            <h3>5. Anota las cosas que te hacen diferente respecto a la competencia(directa o indirecta).
                <br> Puede ser diferente por modo de dar el servicio, características del servicio, precio (no
                recomendado) o beneficio adicional.
            </h3>

            <p> <strong>Ejemplo</strong> 1. Servicio de diseño​ web:
                <br> • Diferencia 1: implementación de copywriting
                <br><br> <strong>Ejemplo</strong> 2. Curso de nutrición: Dietas de éxito
                <br> • Diferencia 1: atención personalizada las 24 horas
                <br> Si solo es uno repite en las tres respuestas
            </p>
            <span> <strong>Tu turno</strong> :</span>
            <br>1<input type="text" id="respuesta-diferencial1">
            <br>2<input type="text" id="respuesta-diferencial2">
            <br>3<input type="text" id="respuesta-diferencial3">

            <br><br>


            <button type="submit">CARGAR RESPUESTAS EN FÓRMULA</button>
            <div class="mensaje-carga"></div>
            <button onclick="generaPDF()"> GENERA PDF Y DESCARGA</button>
        </form>




        <hr style="width:75%; border-color:  #11b28e; margin: 90px 0px 90px 0px;">




    </section>
    <!-- resouestas -->
    <section class="contenedor">
        <h3>Aqui podras ver los resultados una vez que constestes el cuestionario y le des al boton de cargar</h3>

        <div class="contenido-imprimir">
            <h3>FÓRMULA:</h3>
            <p>Ayudo a <span>(POTENCIAL CLIENTE)</span> a resolver <span>(PUNTO DE DOLOR)</span> a través de
                <span>(SERVICIO/PRODUCTO/MÉTODO)</span> para conseguir <span>(BENEFICIO)</span>.
            </p>



            <h2>Resultados:</h2>
            <div class="resultados">
                <h2>A </h2>
                <h4>Ayudo a <span class="cliente-potencia1">respuesta 1</span> a resolver <span
                        class="problema-dolor1"></span> a través de
                    <span class="servicio-producto1"></span> para conseguir <span class="bene-ficio1"></span>
                </h4>
            </div>
            <div class="resultados">
                <h2>B </h2>
                <h4>Ayudo a <span class="cliente-potencia2"></span> a resolver <span class="problema-dolor2"></span> a
                    través de
                    <span class="servicio-producto2"></span> para conseguir <span class="bene-ficio2"></span>
                </h4>
            </div>
            <div class="resultados">
                <h2>C </h2>
                <h4>Ayudo a <span class="cliente-potencia3"></span> a resolver <span class="problema-dolor3"></span> a
                    través de
                    <span class="servicio-producto3"></span> para conseguir <span class="bene-ficio3"></span>
                </h4>
            </div>
            <hr style="width:75%; border-color:  #11b28e; margin: 90px 0px 90px 0px;">

            <h2>A manera de título</h2>
            <h3>FÓRMULA:</h3>
            <h2>(Producto/servicio) para (nicho/cliente potencial) con (valor diferencial) </h2>
            <h4>(Sitios web) para (negocios localces) con (palabras que conectan)</h4>
            <div class="resultados">
                <h2>A </h2>
                <h4><span class="servicio-producto4"></span> para <span class="cliente-potencia4"></span> con <span
                        class="valor-diferencial1"></span></h4>
            </div>
            <div class="resultados">
                <h2>B </h2>
                <h4><span class="servicio-producto5"></span> para <span class="cliente-potencia5"></span> con <span
                        class="valor-diferencial2"></span></h4>
            </div>
            <div class="resultados">
                <h2>C </h2>
                <h4><span class="servicio-producto6"></span> para <span class="cliente-potencia6"></span> con <span
                        class="valor-diferencial3"></span></h4>
            </div>
        </div>
    </section>
    <div class="contenedor">
        <button onclick="generaPDF()"> GENERA PDF Y DESCARGA</button>
    </div>
    <footer>
        <div class="contenido-footer">
            <span>Creado por Marco Jaramillo - 2021
            </span>
        </div>
    </footer>

    <script src="/apps-weblocal/js/propuesta-app.js"></script>
    <script src="/apps-weblocal/js/imprimePDF.js"></script>
</body>

</html>


<!-- termina html -->
<?php
   }
   ?>