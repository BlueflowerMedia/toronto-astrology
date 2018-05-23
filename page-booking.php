<?php get_header(); ?>

<section id="section-contact-forms">
  <div class="container">
    <h1>Booking An appointment</h1>
    <h2>Contact form</h2>
    <?php echo do_shortcode('[contact-form-7 id="85" title="Contact form 1"]') ?>

  </div>
</section>

<section id="contact-map">
  <div class="container flex-row">
    <div class="contact-info flex1">
      <h3>INFO<span class="big-dot blue">.</span></h3>
      <p>
        <a href=""><i class="fas fa-phone-volume" style="color:#3B5998"></i></a>(647) 220-7899
      </p>
      <p>
        <a href=""><i class="fas fa-envelope-square" style="color:#3B5998"></i></a> info@toronto-astrology.com
      </p>
      <p>
        <a href=""><i class="fas fa-map-marker" style="color:red"></i></a> 7393 Markham Rd, Markham, ON L3S 0B5
      </p>
    </div>
    <div class="contact-map flex1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.3487100229727!2d-79.25554098423468!3d43.84860054779078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d6fbb39e6dad%3A0x3d940b5966466cd7!2s7393+Markham+Rd%2C+Markham%2C+ON+L3S+0B5!5e0!3m2!1sen!2sca!4v1527092017261"
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<?php get_footer(); ?>