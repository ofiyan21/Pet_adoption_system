<script>
  
  document.title ='Adopt-Here | Pet Details';
</script>
<?php 
include 'config.php';
include 'header.php';
session_start();
if(!$_SESSION['user']){
      echo '<script language="javascript">';
        echo 'alert("Please Login first"); location.href="login.php"';
        echo '</script>';
// header("Location: login.php");
}
else { ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Pets</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About Pets</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
 <!-- <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pets</h2>
          <p>About <span>Pets</span></p>
        </div>

        <div class="row gy-8">

          <div class="col-lg-10 col-md-50 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4></h4>
                <span> </span>
                <p>Vaccinated: </p>
                <p></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> --><!--End Chefs Section -->
<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
              <?php
 $id = $_GET['id'];
$records = mysqli_query($conn,"SELECT * FROM `pets` WHERE id='$id' "); // fetch data from database

while($data = mysqli_fetch_array($records))
{

?>
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $data['img']; ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1"><?php echo $data['type']; ?></div>
                        <h1 class="display-5 fw-bolder"><?php echo $data['name']; ?></h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through">$45.00</span> -->
                            <span>Size: <?php echo $data['size']; ?></span>
                        </div>
                        <p class="lead">
                          <?php echo $data['about']; ?><br>
                          <li>Vaccinated: <?php echo $data['vaccinated']; ?></li>
                        </p>
                        <div class="d-flex">
                            <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> -->
                            <?php  if($data['adopted']=="no"){?>
                            <button class="btn btn-danger flex-shrink-0 bg-gradient" type="button">
                                <i class="bi-cart-fill me-1"></i>
                               <a href="want_adopt.php" style="color: white;">Want to Adopt</a>
                            </button><?php } ?>
                        </div>
                    </div>
                </div>
            </div><?php } ?>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related Pets</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  <?php   $records = mysqli_query($conn,"SELECT * FROM `pets` order by RAND() LIMIT 4"); // fetch data from database

while($data = mysqli_fetch_array($records))
{?>
                  
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <?php  if($data['adopted']=="yes"){?>
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">I am Adopted !! &#128151;</div><?php } ?>
                            <!-- Product image-->
                            <img class="card-img-top w-100" style="height: 200px;" src="<?php echo $data['img']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $data['name']; ?></h5>
                                    <!-- Product price-->
                                    <!-- <span class="text-muted text-decoration-line-through">$50.00</span> -->
                                    <?php echo $data['size'];?> &#x2022; <?php echo $data['gender'];?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                  <?php  if($data['adopted']=="yes"){?>
<a class="btn btn-outline-dark mt-auto" href="adop_detail.php?id=<?php echo $data['id']; ?>">VIEW</a>
<?php }
else{?>
<a class="btn btn-outline-dark mt-auto" href="adop_detail.php?id=<?php echo $data['id']; ?>">ADOPT</a>

<?php }
 ?></div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>   
  </main><!-- End #main -->
<?php } ?>
<?php include 'footer.php';?>