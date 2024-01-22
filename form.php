<script>
  
  document.title ='Adopt-Here | Donation Form';
</script>
<?php 
include 'header1.php';
?>
<div class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Donation Form</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Donation Form</li>
          </ol>
        </div>
      </div>
    </div>
<section style="background-color :rgb(214, 214, 214)">
  <div class="container " >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-24" style="box-shadow: 5px 5px 7px gray, -5px -5px 7px gray;">
          <div class="row">
            <!-- <div class="col-xl-5 d-none d-xl-block">
              <img src="https://st.depositphotos.com/1229718/2996/i/450/depositphotos_29969971-stock-photo-pet-group-sign-vertical.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div> -->
            <div class="col-xl-6">
              <div class="card-body p-md-4 text-black">
                <div class="section-header">
          <!-- <h2>Contact</h2> -->
          <p><b><span>Donation Form</span></b></p>
        </div>

                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" class="form-control" />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n1" class="form-control" />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-2">

                    <select class="form-select">
                      <option value="1">State</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-2">

                    <select class="form-select">
                      <option value="1">City</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                </div>
<br>
                <div class="form-outline mb-2">
                  <input type="text" id="form3Example9" class="form-control" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example90" class="form-control" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example99" class="form-control" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example97" class="form-control" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="d-flex justify-content-end pt-5">
                  <button type="button" class="btn btn-outline-info">Reset all</button>
                  <button type="button" class="btn btn-danger ms-2">Submit form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
// include 'footer.php';
?>