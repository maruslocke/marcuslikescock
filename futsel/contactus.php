<!-- start of includes -->
<?php
$page_title = "home";
include ("includes/header.php");
include ("includes/nav.php");
?>
<!-- end of includes -->

<link rel="stylesheet" href="css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section id="contact">
  <div class="container-fluid">
    <div class="well well-sm">
    <h3 style="color: #fec625;">Contact Us</h3>

    </div>

<div class="row">
 <div class="col-md-7">
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11986.444106778918!2d174.8020025!3d-41.3173248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38af8ebdfc4f05%3A0xab2561de2408f2e4!2sAkau%20Tangi%20Sports%20Centre!5e0!3m2!1sen!2snz!4v1684882788016!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong> want to sign up? email us!</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include ("includes/footer.php");
?>