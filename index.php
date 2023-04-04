     <?php include('components/header.php'); ?>

     <!-- HOME -->
     <section id="home" class="parallax-section">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner" role="listbox">
                                   <div class="item active">
                                        <h1>Sites com Wordpress e Elementor</h1>
                                   </div>
                                   <div class="item">
                                        <h1>Criação de Sites Profissionais</h1>
                                   </div>
                                   <div class="item">
                                        <h1>Criação de Lojas Virtuais</h1>
                                   </div>
                                   <div class="item">
                                        <h1>Cursos EAD em Vídeos</h1>
                                   </div>
                              </div>
                         </div> 
                    </div>
               </div>
          </div>

          <!-- Video -->
          <video controls autoplay loop muted>
               <source src="videos/home-video.mp4" type="video/mp4">
          </video>
     </section>

     <!-- Orçamento -->
     <section id="orcam" class="parallax-section">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1>Em que posso ajudar?</h1>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <?php
                         if (filter_has_var(INPUT_POST, 'email') && !empty(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))) {
                              $nome = filter_input(INPUT_POST, 'cf-name', FILTER_SANITIZE_STRING);
                              $zap = filter_input(INPUT_POST, 'cf-zap', FILTER_SANITIZE_STRING);
                              $email = filter_input(INPUT_POST, 'cf-email', FILTER_VALIDATE_EMAIL);
                              $message = filter_input(INPUT_POST, 'cf-message', FILTER_SANITIZE_STRING);

                              $to = "comercial@bplus.dev.br";
                              $subject = "Contato - B Plus Dev";
                              $body = "Nome: $nome\r\n"
                                   . "Email: $email\r\n"
                                   . "Whatsapp: $zap\r\n"
                                   . "Mensagem: $message";
                              $header = "From: site@bplus.dev.br" . "\r\n" 
                                   . "Reply-To: $email\r\n" 
                                   . "X-Mailer: PHP/" . phpversion()
                                   . "Content-Type: text/plain; charset=UTF-8\r\n";
                              
                                   if (mail($to, $subject, $body, $header)) {
                                        echo "Mensagem enviada com sucesso!";
                                   } else {
                                        echo "Falha ao enviar! Tente mais tarde!";
                                   }
                         }
                    ?>
                    
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <!-- FORMULÁRIO DE CONTATO AQUI -->
                         <form id="orcam-form" action="" method="POST" role="form">
                              <!-- SE E-MAIL ENVIADO COM SUCESSO -->
                              <h6 class="text-success">Sua mensagem foi enviada com sucesso.</h6>
                              
                              <!-- SE ENVIO DE CORREIO SEM SUCESSO -->
                              <h6 class="text-danger">O e-mail deve ser válido e a mensagem deve ter mais de 1 caractere.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="cf-name" placeholder="Nome">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="tel" class="form-control" id="cf-tel" name="cf-zap" placeholder="Whatsapp">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="email" class="form-control" id="cf-email" name="cf-email" placeholder="Email">
                                   <textarea class="form-control" rows="5" id="cf-message" name="cf-message" placeholder="Menssagem"></textarea>
                              </div>

                              <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                                   <div class="section-btn">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit"><span data-hover="Enviar!">Enviar!</span></button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>

     <?php include('components/footer.php'); ?>