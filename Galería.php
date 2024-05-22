<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estiloGaleria.css">
<title>Sección adopciones</title>
</head>

<body>
<header>
        <div class="menu">
            <label class="Bdesplegar" for="check" class="menuButton">
                <input class="desplegar" id="check" type="checkbox">
                <span class="top"></span>
                <span class="mid"></span>
                <span class="bot"></span>
            </label>
            <div class="listMenu">
                <ul>
                    <li><img class="icon2" src="imagenes/iconoPyG.png" alt=""><h3>Explora nuestras secciones:</h3></li>
                    <hr>
                    <li><a class="lista" href="principalLoggeado2.php"><img class="icon1y5" src="imagenes/casa.png" alt="">Página principal</a></li>
                    <li><a class="lista" href="principalLoggeado.php"><img class="icon1" src="imagenes/adoptado.png" alt="">Adopta un peludo</a></li>
                    <li><a class="lista" href="#contact"><img class="icon1esp2" src="imagenes/iconoLoc.png" alt="">Contactanos</a></li>
                </ul>
            </div>
        </div>

        <div class="logo">
            <a href="principalLoggeado2.php">
                <img src="imagenes/logoPrinc.png" alt="">
            </a>
        </div>

        <div class="IyRLog">
            <img src="imagenes/perroPetao.jpg" alt="">
            <?php 
                echo "Hola ".$_SESSION["nombre"];
            ?>
            <a href="cerrar.php">Cerrar sesion</a>
        </div>

    </header>


    <h2 class="tit">Conoce a nuestros gatos</h2>

    <section  class="slider" id="gatos"> 
  <div class="slide active slide1">
    <img clasS="imgSL" src="imagenes/gatoKatra.jpg" alt="">
    <div class="txt">
      <h2>Esta es <strong>Katra</strong></h2>
        <ul>
            <li><p> <strong>Edad:</strong> 1 año y 4 meses</p></li>
        </ul>
        <p class="parrafo">
            Katra es una gata de dos años, con excelente salud, vacunas al día y microchip.
            Es algo arisca al principio, pero con paciencia se adapta bien. Ideal para un hogar tranquilo y comprensivo.
            Aunque es independiente, disfruta de momentos de tranquilidad junto a sus dueños.
            Dale la oportunidad de ser parte de tu familia y descubre una compañera leal y única.
        </p>
    </div>
  </div>
  
  
  <div class="slide slide2">
        <img class="imgSL" src="imagenes/gatoDana.jpg" alt="">
    <div class="txt">
        <h2>Esta es Dana</h2>
        <ul>
            <li><p> <strong>Edad:</strong> 2 años y 4 meses</p></li>
        </ul>
        <p class="parrafo">Dana, a pesar de su mirada intimidante, es una gata increíblemente dulce y cariñosa.
             Con un corazón de oro bajo su apariencia imponente, está lista para encontrar un hogar amoroso donde pueda compartir su 
             afecto sin reservas. Dana es leal, afectuosa y siempre lista para dar amor. Aunque puede parecer seria a primera vista,
              su personalidad es cálida y acogedora, ideal para quienes buscan una compañera fiel y cariñosa.
             Dale la oportunidad de formar parte de tu familia y descubre el amor incondicional que tiene para ofrecer.</p>
    </div>
  </div>
  <div class="slide slide3">
   <img class="imgSL" src="imagenes/gatoMichi.jpg" alt="">
     <div class="txt">
        <h2>Este es Barzos</h2>
        <ul>
            <li><p> <strong>Edad:</strong> 3 años</p></li>
        </ul>
        <p class="parrafo">Barzos es un gato noble y majestuoso que encanta con su presencia imponente y su elegancia felina.
             Aunque su nombre puede transmitir seriedad, en realidad es un felino cariñoso y juguetón que busca un hogar donde
              pueda desplegar toda su gracia y encanto. Con su pelaje suave y su mirada cautivadora, Barzos es el compañero perfecto
               para aquellos que buscan un amigo leal y lleno de personalidad.
             Dale la oportunidad de ser parte de tu vida y descubre la belleza y el cariño que este felino único tiene para ofrecer.</p>
    </div>
   
  </div>
  
  
  
  <nav>
    <img src="imagenes/pata.png"  class="b1 active" alt="">
    <img src="imagenes/pata.png"  class="b2" alt="">
    <img src="imagenes/pata.png"  class="b3" alt="">
  </nav>
</section>
<hr>

<h2 class="tit">Conoce a nuestros perros</h2>

<section class="slider" id="perros">
  <div class="slide active slide1">
  <img class="imgSL" src="imagenes/perroComodin.jpg" alt="">
    <div class="txt">
        <h2>Este es Pancho</h2>
        <ul>
            <li><p> <strong>Edad:</strong> 1 año y 7 meses</p></li>
        </ul>
        <p class="parrafo">Pancho es un perro lleno de energía y alegría, siempre listo para explorar el mundo y compartir momentos
             de diversión y afecto. Con su cola en constante movimiento y su mirada llena de curiosidad, Pancho es un compañero leal
              que nunca dejará de sorprenderte. Su amor por la aventura se combina perfectamente con su deseo de estar cerca de sus seres
               queridos, convirtiéndolo en el amigo ideal para cualquier hogar activo y cariñoso.
             Dale la oportunidad de ser parte de tu familia y descubre la alegría y la vitalidad que Pancho puede aportar a tu vida.</p>
    </div> 
 </div>


  <div class="slide slide2">
  <img class="imgSL" src="imagenes/perroLuna.jpg" alt="">
    <div class="txt">
        <h2>Esta es Luna </h2>
        <ul>
            <li><p> <strong>Edad:</strong> 5 meses</p></li>
        </ul>
        <p class="parrafo">Con su pelo suave y su mirada llena de curiosidad, Luna, una mastina joven, representa la promesa
             de compañerismo y amor incondicional. Ansiosa por explorar el mundo que la rodea y compartir momentos de alegría y afecto,
              esta encantadora canina busca un
             hogar donde pueda crecer y prosperar junto a una familia cariñosa que valore su energía y lealtad.</p>
    </div>
  </div>


  <div class="slide slide3">
  <img class="imgSL" src="imagenes/perroPetao.jpg" alt="">
    <div class="txt">
        <h2>Este es Titan</h2>
        <ul>
            <li><p> <strong>Edad:</strong> Nos da miedo preguntarle</p></li>
        </ul>
        <p class="parrafo">Titan es el tipo de perro que te helará la sangre con solo mirarlo. Con su porte intimidante y su mirada feroz, 
            parece haber salido directamente de tus peores pesadillas. Su presencia es como una sombra oscura que acecha en la noche, listo 
            para desatar el caos con solo un gruñido.
             Este canino no es para los débiles de corazón; es una máquina de destrucción con cuatro patas, un verdadero terror en forma de perro</p>
    </div>
  </div>


  <div class="slide slide4">
  <img class="imgSL" src="imagenes/perroPocho.jpg" alt="">
    <div class="txt">
        <h2>Este es Turco</h2>
        <ul>
            <li><p> <strong>Edad:</strong> 4 años y 4 meses</p></li>

        </ul>
        <p class="parrafo">Con su pelaje suave y su mirada tranquila, Turco es el compañero perfecto para aquellos que buscan calidez y tranquilidad en un mundo agitado. Aunque su tamaño imponente pueda parecer intimidante a primera vista, su naturaleza gentil y amigable lo convierte en un amigo leal y confiable. Turco anhela encontrar un hogar donde pueda compartir su amor incondicional y ofrecer consuelo y compañía a quienes lo rodean</p>
    </div>
  </div>


  <div class="slide slide5">
  <img class="imgSL" src="imagenes/PerroThorYVenus.jpg" alt="">
    <div class="txt">
        <h2>Estos son Thor y Venus</h2>
        <ul>
            <li><p> <strong>Edad:</strong> 3 meses</p></li>
        </ul>
        <p class="parrafo">Thor y Venus son dos cachorros llenos de vitalidad y amor, listos para conquistar el mundo con sus travesuras y alegría contagiosa. Con sus ojos brillantes y sus colas en constante movimiento, esta pareja dinámica ilumina cualquier habitación con su energía positiva y su espíritu juguetón. Juntos, son imparables, y buscan un hogar donde puedan crecer y aprender mientras traen felicidad y diversión a la vida de quienes los rodean</p>
    </div>
  </div>

  <nav>
    <img src="imagenes/pata.png"  class="b1 active" alt="">
    <img src="imagenes/pata.png"  class="b2" alt="">
    <img src="imagenes/pata.png"  class="b3" alt="">
    <img src="imagenes/pata.png"  class="b4" alt="">
    <img src="imagenes/pata.png"  class="b5" alt="">
  </nav>
</section>

<section class="contacto" id="contact">
    <hr>
  <h2>¿Interesado en Adoptar?</h2>
  <p>Estamos encantados de que estés considerando la adopción de uno de nuestros adorables peludos. En Adopta un Peludo, 
    nos esforzamos por encontrar hogares amorosos y responsables para todos nuestros animales. Si tienes alguna pregunta sobre el proceso de adopción, 
    los requisitos o simplemente quieres saber más sobre uno de nuestros animales en adopción, no dudes en ponerte en contacto con nosotros.
     Nuestro equipo estará encantado de ayudarte en todo lo que necesites.</p>

    <div>
        <a href="mailto:adopta_un_peludo@centroadopcion.com" class="contact-button">¡Contáctanos!</a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79220.47176406412!2d5.597377166086721!3d51.64812240000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c71c30d5f1a9db%3A0x129c661226a492b8!2sMachinebouw%20Van%20Lieshout%20B.V.!5e0!3m2!1ses!2ses!4v1716303307173!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  
</section>




    <footer class="footer">
        <div class="enlaces">
            <ul>
                <li><a href="https://www.instagram.com/" target="_blank"><img class="eContacto" src="imagenes/instagram.png" alt=""></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><img class="eContacto" src="imagenes/facebook.png" alt=""></a></li>
                <li><a href="https://www.youtube.com/watch?v=S6O1PYlE5BI" target="_blank"><img class="eContacto" src="imagenes/youtube.png" alt=""></a></li>
                <li><a href="https://x.com/" target="_blank"><img class="eContacto" src="imagenes/twitter.png" alt=""></a></li>
                <li><a href="mailto:adopta_un_peludo@centroadopcion.com" target="_blank"><img class="eContacto" src="imagenes/gmail.png" alt=""></a></li>
            </ul>
            <hr>
        </div>
        <div class="info">
            <div class="logoycont">
                <div><img class="logofooter" src="imagenes/logoPrinc.png" alt=""></div>
                <div>
                   <ul>
                    <li><p>☎ Telefono de contacto: +34 633 50 82 42</p></li>
                    <li><p>✉ Correo electrónico: adopta_un_peludo@centroadopcion.com</p></li>
                    <li><p>🏠 Dirección: C/ de los perros abandonados, nº 7.</p></li>
                </ul> 
                </div>
            </div>
            <div>
                <p class="Copy">Copyright © 2024 All Rights Reserved by Adopta un peludo.</p>
            </div>
            <div class="politicas">
                <a href="InformacionLegal.html" target="_blank">Información legal</a>
                <hr>
                <a href="https://www.privacypolicies.com/live/b737b94a-566e-426d-a240-40ecd177a1fa" target="_blank">Política de privacidad</a>
            </div>
        </div>
       
   </footer>
   <script src="galeriaJS.js" defer></script>

</body>
</html>