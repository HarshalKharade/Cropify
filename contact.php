<?php
include("header.php");
if(isset($_POST['submit']))
{
	$to = "mr.sanskariviju000@gmail.com";
	$subject = "Message from Cropify";		
	$message = "<html>
	<head>
	<title>Cropify Contact Us form</title>
	</head>
	<body>
	<p>Cropify Contact Us form</p>
	<table>
	<tr>
	<th>Name</th>
	<td>$_POST[name]</td>
	</tr>
	<tr>    
	<th>Email ID</th>
	<td>$_POST[email]</td>
	</tr>
	<tr>
	<th>Contact Number</th>
	<td>$_POST[contctno]</td>
	</tr>
	<tr>
	<th>Subject</th>
	<td>$_POST[subject]</td>
	</tr>
	<tr>
	<th>Message</th>
	<td>$_POST[message]</td>
	</tr>
	</table>
	</body>
	</html>";
	echo "<script>alert('Thank You For Dropping A Mail!! We will Get Back To You Soon..');</script>";
	//sendemailmsg($to,$subject,$message);
	include("phpmailer.php");
	sendmail($to, "Cropify" , $subject, $message);
	echo "<script>window.location='contact.php';</script>";
}
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CONTACT US...</h2>
          <ol>
            <li>Happy to help..</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	

 
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>We'd Love To Hear From You!!!</h3>
          <p> Please use the contact form on the right side if you have any questions or requests, concerning our services. <br>We will respond to your message within 24 hours.</p>
    
        <a href="#" class="twitter cta-btn "><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook cta-btn"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram cta-btn"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus cta-btn"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin cta-btn"><i class="bx bxl-linkedin"></i></a>

        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1687586195888!6m8!1m7!1sKJ2ebTiBHSiYczjEXE9rDQ!2m2!1d18.64279916966312!2d73.8011093556875!3f270!4f4.810000000000002!5f0.4000000000000002" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>ASM IBMR Block 'C, MIDC, Chinchwad, Pimpri-Chinchwad, Maharashtra 411019</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>enquiry@asmedu.org</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91-2027475090</p>
                </div>
              </div>
            </div>
            <form action="" method="post" role="form" class="mt-4">
              <div class="form-row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="text" class="form-control" name="contctno" id="contctno" placeholder="Your Contact  No."  data-msg="Please enter a valid Contact No" required />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><input type="submit" class="btn btn-success" name="submit" id="submit" value="Send Message"></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
<?php
include("footer.php");
?>