<?php 
include 'header1.php';
include 'config.php';
?>
<div class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Pets</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Pets</li>
          </ol>
        </div>
      </div>
    </div>
<section style="background-color: #eee;">
  <div class="text-center container py-5">
    <div class="row"><?php
 $type = $_GET['type'];
$records = mysqli_query($conn,"SELECT * FROM `pets` WHERE type='$type' "); // fetch data from database

while($data = mysqli_fetch_array($records))
{ ?>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card" >
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-dark"
            data-mdb-ripple-color="light">
            <img src="<?php echo $data['img']; ?>"class="w-100 zoom" style="height: 300px;"/>
            <a href="#!">
              <div class="mask">
                <!-- <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-primary ms-2">New</span></h5>
                </div> -->
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3"><?php echo $data['name']; ?></h5>
            </a>
            <a href="" class="text-reset">
              <p><?php echo $data['size'];?> &#x2022; <?php echo $data['gender'];?></p>
            </a>
            <h4 class="mb-3"><a href="adop_detail.php?id=<?php echo $data['id']; ?>">Adopt</a></h4>
          </div>
        </div>
      </div><?php } ?>
</div>
</div>
</section>
<?php 
include 'header1.php';
include 'footer.php';?>