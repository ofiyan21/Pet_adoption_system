<script>
  
  document.title ='Adopt-Here | Contact Us';
</script>
<?php
include 'header1.php'; 
include 'config.php';

session_start();
// if(isset($_POST['submit']))
// {   

// $status="Pending";
// $insert = 
// mysqli_query($conn,"insert into contacts (name, email, phone, regarding, subject, message, status)values ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[regarding]','$_POST[subject]','$_POST[message]','$status')");

//     if($insert)
//     {
//        echo '<script language="javascript">';
//         echo 'alert("Successfully Registered"); location.href="index.php"';
//         echo '</script>'; 
//     }
//     else
//     {
        
//         echo mysqli_error();
//     }
// }
?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

 <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Contact</h2> -->
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <img style="border:0; width: 100%; height: 350px;" src="https://wallpaperaccess.com/full/1327675.jpg" frameborder="0" allowfullscreen>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
<br>
       <form action="contact_send.php" method="post" role="form"  data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-6 col-md-12">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 col-md-8">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div> -->
                <div class="col-lg-6 col-md-8">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" data-rule="minlen:10" data-msg="Please enter at least 10 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 col-md-8">
                  <input type="text" class="form-control" name="regarding" id="regarding" placeholder="Regarding">
                  <div class="validate"></div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
                <!-- <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div> --><br>
              <div class="text-center"><button  class="btn btn-see" name="send">Send Enquiry</button></div>
            </form>

      </div>
    </section><!-- End Contact Section -->
   
  </main><!-- End #main -->
<?php include 'footer.php';?>