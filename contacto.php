<?php
require_once 'plantillas/header.php';
?>



<!-------- Banner - Texto header --------->
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contacto</h2>
			</div>
		</div>
	</div>
</section>
<!-------- End Banner - Texto Header --------->




<!--Start Contactanos -->
<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">

        <!-- section title -->
        <div class="col-12">
          <div class="title text-center">
            <h2>Hablemos</h2>
            <p>Estamos aquí para ayudarte a impulsar tus proyectos.
               ¡Contáctanos y trabajemos juntos!</p>
            <div class="border"></div>
          </div>
        </div>
        <!-- /section title -->

        <!-- Contact Details -->
        <div class="contact-details col-md-6 ">
          <h3>Detalle para Contactarnos</h3>
          <p></p>
          <ul class="contact-short-info">
            <li>
              <i class="tf-ion-ios-home"></i>
              <span>La Serena, Chile</span>
            </li>
            <li>
              <i class="tf-ion-android-phone-portrait"></i>
              <span>Celular Soporte: +56 950 566 018</span>
            </li>
            <li>
              <i class="tf-ion-android-globe"></i>
              <span>Celular Info: +56 937 680 237</span>
            </li>
            <li>
              <i class="tf-ion-android-mail"></i>
              <span>Email: admin@maytechsoluciones.com</span>
            </li>
          </ul>
          <!-- Footer Social Links -->
        </div>
        <!-- / End Contact Details -->

        <!-- Contact Form -->
        <div class="contact-form col-md-6 ">

          <form>

            <div class="field">
              <input type="hidden" name="from_name" id="from_name" value="Marco Antonio Yánez">
            </div>

            <div class="field">
              <input type="text" placeholder="Ingrese su Nombre Completo" class="name form-control" name="to_name" id="to_name" required>
            </div>

            
            <div class="field">
              <input type="text" placeholder="Ingrese Teléfono" class="phone form-control" name="user_phone" id="user_phone" required>
            </div>
            
            
            <!-- <div class="form-group"> -->
              <div class="field">
              <input type="email" placeholder="Ingrese su Email" class="email form-control" name="user_mail" id="user_mail">
            </div>

            <div class="field">
              <textarea rows="6" placeholder="Ingresar Mensaje Detallado" class="message form-control" name="message" id="message" required></textarea>
            </div>


            <div id="cf-submit">
              <!-- <input type="hidden" id="contact-submit"> -->
              <input type="button" onclick="sendwhatsapp();" id="button" value="Enviar"  class="btn btn-danger"> 
            </div>
          </form>

        </div>
        <!-- ./End Contact Form -->

      </div> <!-- end row -->
    </div> <!-- end container -->
</section> 
<!-- end section contactanos -->


<?php
include 'plantillas/footer.php';
?>