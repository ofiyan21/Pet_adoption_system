<?php 
include 'header1.php';
include 'config.php';
?>
<script>
  
  document.title ='Adopt-Here | Feedback';
</script>
<main id="main">
	<div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Feedback</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Feedback</li>
          </ol>
        </div>

      </div>
    </div>
<section class="contact">
	<div class="container" data-aos="fade-up">
		<div class="section-header">
          <!-- <h2>Contact</h2> -->
          <p><span><b>Feedback</b></span></p>

        </div>
        <div class="text-center">
<h6>For any corrections / improvements, please do write to us and we shall have that corrected immediately.</h6>
<br><h6>Thanks for all the support!</h6>
</div ><br>
 <form action="send.php" method="post" role="form"  data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-3">
                <div class="form-group mt-3">
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
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" data-rule="minlen:10" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div> -->
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
              <div class="text-center"><button class="btn btn-see" name="send">Submit</button></div>
            </form>

	</div>
</section>
</main>


<?php include 'footer.php';?>