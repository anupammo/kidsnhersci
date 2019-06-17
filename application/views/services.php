<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Anupam Mondal">
  	<meta name="web_author" content="anupammondal.in">
  	<meta name="reply-to" content="a9051985@gmail.com">
  	<meta name="contact" content="a09051985@gmail.com">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>School of Makeup - KIDS N HERS</title>
    <?php
    $this->load->view('navbar');
    ?>
    <header class="bottom-pop-up-blk">
      <img src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" class="header-bg"
      alt="Kids N hers Makeup Studio Kolkata Sonarpur Champahati" title="Kids N hers Makeup Studio at Kolkata, Sonarpur and Champahati" />
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <img class="header-brand" src="<?php echo base_url();?>img/kids-n-hers-parlour-makeup-salon-academy-kolkata-sonarpur-champahati.png"
            alt="kids n hers parlour makeup salon academy kolkata sonarpur champahati"
            title="kids n hers parlour makeup salon academy kolkata sonarpur champahati" />
            <h1 class="text-uppercase text-center">Kids N Hers - Services We Offer</h1>
            <hr />
            <p class="text-center text-dtls">Complete Beauty care services including saloon, Makeup, Makeover, Facial, Spa, Hair Cut, Hair Care
              Treatment, Waxing, Pedicure, Menicure, Hairstyling, Hair Colouring, Face threading, Skin Care Treatment, Bleaching Service, Nail
              art etc.</p>
          </div>
        </div>
      </div>
    </header>
    <section id="services" class="after-header">
      <div class="container pop-up-block">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <a href="#" class="thumbnail">
              <img src="<?php echo base_url();?>img/kids-n-hers-makeup-studio.jpg"
              alt="Kids N hers Makeup Studio Kolkata Sonarpur Champahati" title="Kids N hers Makeup Studio at Kolkata, Sonarpur and Champahati">
              <h2 class="text-center">Makeup Studio</h2>
            </a>
          </div>
          <div class="col-xs-12 col-sm-4">
            <a href="#" class="thumbnail">
              <img src="<?php echo base_url();?>img/kids-n-hers-Saloon Academy.jpg"
              alt="Kids N hers Makeup Studio Kolkata Sonarpur Champahati" title="Kids N hers Makeup Academy at Kolkata, Sonarpur and Champahati">
              <h2 class="text-center">Academy</h2>
            </a>
          </div>
          <div class="col-xs-12 col-sm-4">
            <a href="#" class="thumbnail">
              <img src="<?php echo base_url();?>img/kids-n-hers-makeover.jpg"
              alt="Kids N hers Makeup Studio Kolkata Sonarpur Champahati" title="Kids N hers Beauty Salon at Kolkata, Sonarpur and Champahati">
              <h2 class="text-center">Saloon</h2>
            </a>
          </div>
          <div class="col-xs-12">
            <h1 class="text-uppercase text-center">Kids N Hers - Services We Offer</h1>
            <hr />
            <p class="text-center text-dtls">Kids N Hers - A Complete, Advanced, Afforadble saloon and Makeup Studio managed by Renowned,
              experinced, Professional Makeup Artist Mrs. Aparna M. provise elegant services to three generations for decade at Sonarpur Kolkata
              and Champahiti with budget price. Found Healthy, Royal and Friendly environment with world class services.</p>
          </div>
        </div>
      </div>
    </section>
    <?php
    $this->load->view('footers');
    ?>
  </body>
</html>
