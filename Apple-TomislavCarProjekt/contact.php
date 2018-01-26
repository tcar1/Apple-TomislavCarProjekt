<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<iframe align="right" style="align:right;float:right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50774.426083167185!2d-122.07866407267285!3d37.309313059553034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C+Kalifornija%2C+Sjedinjene+Dr%C5%BEave!5e0!3m2!1shr!2shr!4v1509901740720" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>