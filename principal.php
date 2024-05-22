<?php

    $hubo_error = false;
    if ( isset($_GET['error']) ){
        $hubo_error = true;
    }

    $clase_modal = $hubo_error ? "show" : "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloPrinc.css">
    <title>Adopta un peludo</title>
    <link rel="icon" href="imagenes/logoPrinc.png">
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
                    <li><a class="lista" href="#s1"><img class="icon1esp" src="imagenes/icono.png" alt="">¿Quienes somos?</a></li>
                    <li><a class="lista" href="#s2"><img class="icon1" src="imagenes/registrado.png" alt="">Nuestras Marcas</a></li>
                    <li><a class="lista" href="#s3"><img class="icon1esp2" src="imagenes/perro-delante-de-un-hombre.png" alt="">Testimonios</a></li>
                    <li><a class="lista" href="#s4"><img class="icon1esp2" src="imagenes/boton-de-informacion.png" alt="">Información</a></li>
                </ul>
            </div>
        </div>

        <div class="logo">
            <a href="principal.php">
                <img src="imagenes/logoPrinc.png" alt="">
            </a>
        </div>

        <div class="IyR">
            <a class="button" href="#registro">Registro</a>
            <a class="button" href="#inicio">Inicio de sesión</a>
        </div>

    </header>

    <div id="registro" class="modal">
        <div class="ventana">
            <h2>Registro</h2>

            <form action="base.php" method="post" target="_blank">
                <p>Nombre Completo: <input type="text" name="nombre" minlength="5" maxlength="80" placeholder="Introduzca su nombre" required></p>
                <p>Email: <input type="email" name="email" pattern="*@*" placeholder="Introduzca su email" required></p>
                <p>Fecha de nacimiento: <input type="date" name="fecha_nac" min="1930-01-01" max="2007-01-01" placeholder="Introduzca su fecha de nacimiento" required></p>
                <p>Contraseña: <input type="password" name="contrasena" minlength="8" maxlength="50" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$" placeholder="Introduzca su contraseña" required></p>
                <div class="botones">
                    <input class="btnn" type="submit" value="Registrarse" name="enviar">
                    <a class="cancelar" href="principal.php" style='text-decoration:none;'>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div id="inicio" class="modal <?=$clase_modal ?>">
        <div class="ventana">
            <h2>Inicio de sesión</h2>

            <?php if($hubo_error): ?>
                <p style="color:red">ERROR: Correo o contraseña incorrectos.</p>
            <?php endif; ?>

            <form action="Inicio.php" method="post" target="">
                <p>Nombre de Usuario: <input type="text" name="nombre"  placeholder="Introduzca su Nombre" required></p>
                <p>Contraseña: <input type="password" name="contrasena" minlength="8" maxlength="12" pattern="^(?=.*[A-Z])(?=.*\d).+$" placeholder="Introduzca su contraseña" required></p>
                <div class="botones">
                    <input class="btnn" type="submit" value="Iniciar Sesión" name="enviar">
                    <a class="cancelar" href="principal.php" style='text-decoration:none;'>
                        Cancelar
                    </a>
                </div>           
            </form>
        </div>
    </div>

    <section class="cuerpo" id="s1">
        <main>
            <ul class='slider'>
              <li class='item' style="background-image: url('imagenes/perroCompromiso.jpeg')">
                <div class='content'>
                  <h2 class='title'> Compromiso Social</h2>
                  <p class='description'>
                    Más allá de las adopciones, estamos comprometidos con la comunidad. Nuestro trabajo se extiende a la educación, la sensibilización y el voluntariado. Creemos en el poder de la colaboración y nos esforzamos por crear un mundo donde todos los animales sean tratados con el respeto y el cuidado que merecen.
                  </p>
                </div>
              </li>
              <li class='item' style="background-image: url('imagenes/perroAdop.jpg')">
                <div class='content'>
                  <h2 class='title'>Sobre Nosotros</h2>
                  <p class='description'> En Adopta un Peludo, creemos en el poder transformador del amor animal. Nuestra historia comenzó con una simple idea: brindar un hogar a cada mascota necesitada. Desde entonces, nos hemos dedicado apasionadamente a rescatar, rehabilitar y encontrar hogares amorosos para nuestros amigos de cuatro patas.</p>
                </div>
              </li>
              <li class='item' style="background-image: url('imagenes/perroFamilia2.jpg')">
                <div class='content'>
                  <h2 class='title'>Misión y Visión</h2>
                  <p class='description'> Nuestra misión es clara: salvar vidas y construir familias. Estamos comprometidos con el bienestar animal y trabajamos incansablemente para crear conciencia sobre la importancia de la adopción responsable. Nuestra visión es un mundo donde cada mascota tenga un hogar lleno de amor y compasión. </p>
                </div>
              </li>
              <li class='item' style="background-image: url('imagenes/perroFamilia.jpg')">
                <div class='content'>
                  <h2 class='title'>Servicios</h2>
                  <p class='description'>
                    En Adopta un Peludo, ofrecemos una variedad de servicios diseñados para satisfacer las necesidades de nuestros amigos peludos. Desde adopciones responsables hasta programas de bienestar animal, estamos aquí para ayudar a cada mascota a encontrar su lugar en el mundo y a cada familia a encontrar a su compañero perfecto.
                  </p>
                </div>
              </li>
            </ul>
            <nav class='nav'>
              <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
              <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
            </nav>
          </main>
        </section>

          

        <section class="cuerpo2" id="s2">
            <hr>
            <h2>Marcas con las que trabajamos</h2>
            <div class="logosc2">
            <img src="https://seeklogo.com/images/H/hills-logo-9DB8DEF3A0-seeklogo.com.png" alt="">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/royal-canin-1-logo-svg-vector.svg" alt="">
            <img src="https://www.zarla.com/images/zarla-mascota-co-1x1-2400x2400-20220111-gwkrbdqqcydm9yxwr636.png?crop=1:1,smart&width=250&dpr=2" alt="">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP8KvW3gkgJM7v9fU889m1xWMpKERcwRG7Cw&usqp=CAU" alt="">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRohv3a_jGFwu7da6N60LTwJx_SB-IeWSUNY1Qb4LIDhQlWSX14uLuxu54SMb1BXBZ5ESw&usqp=CAU" alt="">

            </div>
            
        </section> 
        


        <section class="cuerpo3" id="s3">
            <hr>

            <h2>Conoce las experiencias de nuestros clientes</h2>

            <div class="c3parte">
                <div class="text">
                    <h3>Este es Bartolo</h3>
                    <p>"Adoptar a mi mascota de Adopta un peludo fue una de las mejores decisiones que he tomado.
                         No solo he ganado un compañero fiel, sino que también he sido parte de algo más grande: darle una segunda oportunidad a un animal necesitado.
                         Estoy muy agradecido por la labor que realiza Adopta un peludo y por el amor incondicional que mi mascota me brinda cada día."</p>
                </div>
                <div>
                    <img src="imagenes/testimonio1.png" alt="">
                </div>
            </div>

            <div class="c3parte">
                <div>
                    <img src="imagenes/Testimonio2.png" alt="">
                </div>
                <div class="text">
                    <h3>Esta es Luna</h3>
                        <p>"Desde que adopté a mi mascota a través de Adopta un peludo, mi vida ha cambiado para mejor.
                         Ver cómo mi nuevo amigo se adapta a su nuevo hogar y florece cada día es una experiencia increíble.
                         Adoptar no solo le ha dado a mi mascota una nueva vida, sino que también ha enriquecido la mía. ¡No puedo recomendar lo suficiente adoptar a través de Adopta un peludo!"
                        </p>
                </div>
            </div>
            <div class="c3parte">
                
                <div class="text">
                    <h3>Este es Draco</h3>
                        <p>"Desde que Draco se convirtió en mi compañero de entrenamiento, cada día en el gimnasio es una experiencia aún más emocionante.
                             No solo tenemos sesiones intensas levantando pesas juntos, sino que también disfrutamos de largas carreras matutinas y entrenamientos al aire libre. Su energía contagiosa y su espíritu de equipo hacen que cada sesión de ejercicio sea aún más gratificante. 
                            Gracias a Adopta un Peludo por traer a Draco a mi vida y convertir cada sesión en el gimnasio en una aventura llena de diversión y motivación"
                        </p>
                </div>
                <div>
                    <img src="imagenes/jonwenorro.png" alt="">
                </div>
            </div>

        </section>

        <section class="cuerpo4" id="s4">
            <hr>

            <h2 class="c4tit">Voy a adoptar, ¿qué necesito saber?</h2>

                <div class="info-section">
                <h2>Información para Adoptar</h2>
                <p>Adoptar una mascota es una decisión que implica una gran responsabilidad y compromiso. Es importante estar bien informado y preparado para ofrecer un hogar seguro y amoroso a tu nueva mascota. A continuación, encontrarás toda la información que necesitas para llevar a cabo una adopción responsable y exitosa, desde los documentos necesarios hasta los cuidados posteriores a la adopción.</p>

                <div class="info-image">
                     <img src="imagenes/info1.png" alt="">
                 </div>

            <h3>Documentos Necesarios</h3>
            <p>Es esencial que la mascota esté al día con sus vacunas para protegerla contra enfermedades graves como la rabia y el moquillo. Además, debe haber pasado por un proceso de desparasitación tanto interna como externa para eliminar parásitos que puedan afectar su salud y la de su entorno. Por último, el microchip es fundamental para su identificación, ya que permite su rápida localización en caso de pérdida
            </p>
            <details>
            <summary>Documentos</summary>
            <ul class="info-list">
            <li><strong>Formulario de Adopción:</strong> Completar y firmar el formulario de adopción proporcionado por la organización.</li>
            <li><strong>Identificación Personal:</strong> Proveer una copia de tu DNI o pasaporte para verificar tu identidad.</li>
            <li><strong>Comprobante de Domicilio:</strong> Presentar una copia de un recibo de servicios (agua, luz, etc.) para confirmar tu dirección.</li>
            </ul>
            </details>

            <div class="info-image">
                 <img class="pasaporte" src="imagenes/pasaporte.jpg" alt="">
             </div>
            
            <h3>Requisitos Médicos</h3>
            <p>Para adoptar una mascota, necesitarás completar y firmar un formulario de adopción que recoja información sobre ti y tu capacidad para cuidar de la mascota. También deberás presentar una copia de tu identificación personal, como el DNI o pasaporte, y un comprobante de domicilio, como una factura de servicios, para verificar tu residencia. Estos documentos aseguran un proceso de adopción responsable y transparente.</p>
            <details>
                <summary>Requisitos</summary>
            <ul class="info-list">
            <li><strong>Vacunas:</strong> Asegurarse de que la mascota esté al día con todas las vacunas obligatorias.</li>
            <li><strong>Desparasitación:</strong> La mascota debe haber sido desparasitada interna y externamente.</li>
            <li><strong>Microchip:</strong> La mascota debe tener un microchip implantado para su identificación.</li>
            </ul>
            </details>

            <div class="info-image">
                 <img src="imagenes/vacunas.jpg" alt="">
            </div>

            
            <h3>Condiciones del Hogar</h3>
            <p>Es esencial que prepares tu hogar para recibir a la nueva mascota. Asegúrate de tener un espacio adecuado donde la mascota pueda moverse libremente y sentirse segura. Además, necesitas contar con todos los suministros básicos como una cama confortable, comederos y bebederos, juguetes, y artículos de higiene. Considera también los peligros potenciales en tu hogar, como productos tóxicos o espacios de los que la mascota podría escapar. Hacer estos ajustes no solo garantiza la seguridad de la mascota, sino que también facilita su adaptación a su nuevo entorno.</p>
    
            <h3>Seguimiento Post-Adopción</h3>
            <p>El proceso de adopción no termina cuando la mascota llega a su nuevo hogar. Las organizaciones suelen realizar seguimientos para asegurarse de que la adaptación está yendo bien y que la mascota está recibiendo el cuidado necesario. Este seguimiento puede incluir visitas al hogar y llamadas telefónicas. Es una oportunidad para resolver dudas, recibir consejos sobre el cuidado de la mascota y asegurar que el bienestar del animal se mantiene a lo largo del tiempo. Es un compromiso continuo que ayuda a garantizar una convivencia armoniosa y feliz.</p>
    
            <div class="info-image">
             <img src="imagenes/info3.jpg" alt="">
            </div>

            <h3>Costos Asociados</h3>
            <p>Adoptar una mascota puede implicar algunos costos, que debes considerar antes de tomar la decisión. La tasa de adopción suele cubrir parte de los gastos veterinarios y de cuidado de la mascota mientras estuvo en la organización. Además, deberás considerar los gastos veterinarios continuos, como vacunas, chequeos regulares y posibles tratamientos médicos. No olvides los artículos necesarios para la mascota, como una cama, comederos, juguetes y productos de higiene. Planificar y prever estos costos es fundamental para asegurar que puedes proporcionar a tu nueva mascota todo lo que necesita para vivir una vida feliz y saludable.</p>
            <details>
            <summary>Gastos</summary>
            <ul class="info-list">
            <li><strong>Tasa de Adopción:</strong> Una tarifa que ayuda a cubrir los gastos médicos y de cuidado de la mascota.</li>
            <li><strong>Gastos Veterinarios:</strong> Costo de las vacunas, desparasitación, microchip y cualquier otro tratamiento necesario.</li>
            <li><strong>Artículos para la Mascota:</strong> Compras necesarias como cama, comedero, juguetes, etc.</li>
            </ul>
            </details>
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

   <script src="Animacion.js" defer></script>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


   

</body>
</html>