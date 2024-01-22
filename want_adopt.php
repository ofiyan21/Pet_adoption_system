<?php include 'header1.php';
include 'config.php';
session_start();
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
    </div>
    <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Contact</h2> -->
          <p>Interested <span>Pet Parent !</span></p>
        </div>
<form action="pet_parent.php" method="POST">
<!-- <div class="container">
    <div class="row">
 Interested Pet Parent
</div> -->


<br>
<div class="row">

    <div class="col-lg-6">
        <label  class="form-label">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name" required value="">
    </div>
    <div class="col-lg-6">
        <label  class="form-label">Email Address:</label>
    <input type="text" class="form-control" placeholder="Enter Email Address" name="email"  value="<?php echo $_SESSION['user'];?>"required>
    </div>
    <div class="col-lg-6">
        <label  class="form-label">Phone:</label>
    <input type="text" class="form-control" placeholder="Enter contact No." name="phone" required>
    </div>
<div class="col-lg-6">
        <label  class="form-label">Age:</label>
    <input type="text" class="form-control" placeholder="Enter age" name="age" required>
    </div>

</div>
<div class="row">
    
    <div class="col-lg-6">
        <label  class="form-label">WHAT IS YOUR PROFESSION?</label>
    <input type="text" class="form-control" placeholder="Enter Profession" name="profession" required>
    </div>
    <div class="col-lg-6">
        <label  class="form-label">WHICH CITY DO YOU RESIDE? </label>
    <input type="text" class="form-control" placeholder="Enter City" name="city" required>
    </div>
    
    
</div>
<div class="row">
    <div class="col-lg-6">
        <label  class="form-label">Complete Address</label>
    <input type="text" class="form-control" placeholder="Enter Address" name="address" required>
    </div>
    <div class="col-lg-6">
        <label  class="form-label">NO. OF PEOPLE AT HOME </label>
    <input type="text" class="form-control" placeholder="Enter NO. OF PEOPLE AT HOME *" name="family_member" required>
    </div>
    <div class="col-lg-6">
        <label  class="form-label">ANY FAMILY ALLERGIES WITH PETS? (PLEASE SPECIFY NOW)</label>
    <input type="text" class="form-control" placeholder="Enter here " name="allergy" required>
    </div>
    <div class="col-lg-6">
        <label  class="form-label">IF ANY PREVIOUS EXPERIENCE WITH PETS, PLEASE SHARE:</label>
    <input type="text" class="form-control" placeholder="Enter here " name="experience" required>
    </div>
</div>

<div class="row">
    
    <div class="ccol-lg-6">
        <label  class="form-label">ANY PRESENT PETS? IF YES, PLEASE DESCRIBE THEM</label>
    <input type="text" class="form-control" placeholder="Enter here " name="present_pet" required>
    </div>
    <br>
    <!-- <div class="col-lg-6">
        <label  class="form-label">You are willing to Adopt a pet / Foster a pet / Both? </label>
          <input type="radio" id="ADOPT" name="ADOPT_FOSTER" value="ADOPT">
  <label for="html">ADOPT</label>
  <input type="radio" id="FOSTER" name="ADOPT_FOSTER" value="FOSTER">  <label for="FOSTER">FOSTER</label>
    </div> -->
</div>


</div>
<div class="text-center">
   
    <div class="col-lg-6">
    <button  class="btn btn-see" name="send">Submit</button>
    </div>
    
</div>
</form>
</section><!-- End Contact Section -->
   
  </main>

<?php include 'footer.php';?>