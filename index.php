<?php require_once('./layout/header.php'); ?> 
    <section id="hero" class="hero section light-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Herzlich<span>Willkommen</span></h1>
            <p>auf meiner persönlichen Website!</p>
            <p>Kurs: Web Programmierung von Ali Khorsandfard</p>
            <p>FISI Sommer 2024</p>
            <p>Philipp Anhäußer</p>
            <p>Oberhausen</p>
            <div class="d-flex">
            </div>
          </div>
        </div>
      </div>
    </section>

   
<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-7">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <label for="name-field" class="pb-2">Ihr Name</label>
            <input type="text" name="name" id="name-field" class="form-control" required="">
          </div>

          <div class="col-md-6">
            <label for="email-field" class="pb-2">Ihre Email</label>
            <input type="email" class="form-control" name="email" id="email-field" required="">
          </div>

          <div class="col-md-12">
            <label for="subject-field" class="pb-2">Betreff</label>
            <input type="text" class="form-control" name="subject" id="subject-field" required="">
          </div>

          <div class="col-md-12">
            <label for="message-field" class="pb-2">Nachricht</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Laden</div>
            <div class="error-message"></div>
            <div class="sent-message">Ihre Nachricht wurde verschickt</div>
            <button type="submit">Kontaktiere mich</button>
          </div>
        </div>
      </form>
    </div>
</div>
<?php require_once('./layout/footer.php'); ?>
  