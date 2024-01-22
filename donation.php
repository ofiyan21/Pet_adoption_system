<?php include 'header1.php'; ?>
<!-- 	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-color: white;
			font-family: 'times of new roman';
			text-align: center;
            /* background-image: url('dog-image.jpg');
            background-repeat: no-repeat;
            background-size: 150% 100%; */
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
            font-size:20px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
            font-size:15px;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			background-color: purple;
			border: 2px solid white;
			border-radius: 16px;
			font-family: inherit;
			font-size: 20px;
			display: block;
			width: 70%;
			margin-top: 50px;
		    margin-left:60px;
			margin-bottom: 25px;
            color:white;
			padding:10px;
            
		}
	</style> -->
</head>

<body>
	<h1>Donation Form</h1>

	<!-- Create Form -->
	<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Donate Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Donate Us</li>
          </ol>
        </div>

      </div>
    </div>
    <section id="contact" class="contact" >
      <div class="container" data-aos="fade-up">
      	 <div class="section-header">
          <!-- <h2>Contact</h2> -->
          <p>Donate <span>Us</span></p>
        </div>
	<form id="form" method="post" role="form"  data-aos="fade-up" data-aos-delay="100">

		<!-- Details --> <div class="row gy-4">
		<div class="col-lg-6 col-md-12">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>

		<div class="col-lg-6 col-md-8">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>

		<div class="col-lg-6 col-md-8">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Age" data-rule="minlen:10" data-msg="Please enter at least 10 chars">
                  <div class="validate"></div>
                </div>

           <div class="col-lg-6 col-md-8">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Amount" data-rule="minlen:10" data-msg="Please enter at least 10 chars">
                  <div class="validate"></div>
                </div>

		 
        <label>Would you like to make this donation in someone else's name?</label>
		<div class="form-check col-sm-1">
  <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Yes
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check col-sm-1">
  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">No
  <label class="form-check-label" for="radio2"></label>
</div>

		
		<div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Any comments or suggestions"></textarea>
                <div class="validate"></div>
              </div>
</div>
		<!-- Multi-line Text Input Control --><br>
		<div class="text-center"><button type="button" class="btn btn-see" name="send">Donate</button></div>
	</form>
</div>
    </section><!-- End Contact Section -->
   
  </main>
<?php include 'footer.php'; ?>
