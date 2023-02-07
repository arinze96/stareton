<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from cryptcohtml.themability.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 08:45:05 GMT -->
<head>
	<title>Cryptco - Contact Page</title>
	@include('include.#home_css')	
</head>

<body class="">
	@include('include.#home_header')
	<!-- .HEADER MENU AREA -->

	<!--  -->
	<div class="main_content">
		<div class="breadcrumb">
			<div class="container">
				<span>Contact Us</span>
			</div>
		</div>
		<div class="container">
			<div class="contact_content">
				<div class="row contact_inner">
					<div class="col-md-5">
				  		<div class="contact_image">
				  			<img src="{{ asset('new2/assets/images/contact.png') }}" alt="contact_image">
				  		</div>
				  	</div>
				  	<div class="col-md-7">			
						<div class="contact_form">
							<h3 class="contact_title">Contact Us</h3>
						
							<form method="post" action="https://cryptcohtml.themability.com/contact.html?submitted=true">
							  	<div class="col-xs-12">
							  		<label>Your Name</label>
								    <input type="text" id="fname" name="firstname" placeholder="" required>
							    </div>
							    <div class="col-xs-12">
							    	<label>Last Name</label>
								    <input type="text" id="lname" name="lastname" placeholder="" required>
								</div>
								<div class="col-xs-12">
									<label>Phone Number</label>
								     <input type="number" id="phone" name="phonenumber" placeholder="" required>
								</div>
								<div class="col-xs-12">
									<label>Comment</label>
								    <textarea id="subject" name="subject" placeholder="" required></textarea>
								</div>	
								<div class="col-xs-12 form-message">
									<div class="submitted">Your message has been sent Successfully</div>
								</div>
								<div class="col-xs-12">
								    <button class="btn">Send Message</button>
							  	</div>
						  	</form>
					  	</div>
				  	</div>				  	
			  	</div>
			  	<div class="col-xs-12 mt-50">
			  		<div class="company_info">
			  			<div class="row">
				  			<div class="col-sm-4">
				  				<div class="company_section">
									<div class="icon-box">
										<div class="icon">
											<i class="fa-solid fa-street-view"></i>
										</div>								
									</div>
									<div class="box-content">
										<div class="title">Cryptco Ltd</div>
										<div class="description">1000 35th St, NewWay, IL9000, KSA</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="company_section">
									<div class="icon-box">
										<div class="icon">
											<i class="fa-solid fa-phone"></i>
										</div>								
									</div>
									<div class="box-content">
										<div class="title">Telephone Number</div>
										<a href="tel:+1123456789" class="description">+1 123 456-789</a>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="company_section">
									<div class="icon-box">
										<div class="icon">
											<i class="fa-solid fa-envelope-open-text"></i>
										</div>								
									</div>
									<div class="box-content">
										<div class="title">E-Mail Us</div>
										<a href="cdn-cgi/l/email-protection.html#4d24232b220d3a282f3e243928632e2220" class="description"><span class="__cf_email__" data-cfemail="a5cccbc3cae5d2c0c7d6ccd1c08bc6cac8">[email&#160;protected]</span></a>
									</div>
								</div>
							</div>
						</div>
			  		</div>
			  	</div>
		  	</div>
		</div>
	</div>
	<!--  -->


	<!-- FOOTER AREA -->
	@include('include.#home_footer')
	<!-- .FOOTER AREA -->

	@include('include.#home_js')
	</body>

<!-- Mirrored from cryptcohtml.themability.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 08:45:05 GMT -->
</html>