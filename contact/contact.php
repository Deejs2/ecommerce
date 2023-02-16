<link rel="stylesheet" type="text/css" href="contact/style.css">
<body>
	<div class="container">
		<h1>Contact Form</h1>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Name" required>
			<input type="text" name="phone" placeholder="Phone" required>
			<input type="email" name="email" placeholder="Email" required>
			<select name="country">
				<option value="">Select Country</option>
				<option value="AF">Afghanistan</option>
                <option value="BD">Bangladesh</option>
                <option value="CA">Canada</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="NP">Nepal</option>
                <option value="PK">Pakistan</option>
                <option value="CH">Switzerland</option>
                <option value="TH">Thailand</option>
                <option value="GB">United Kingdom</option>
                <option value="US">United States</option>
               
				<!-- Add more countries here -->
			</select>
			<textarea name="message" placeholder="Message" required></textarea>
			<input type="submit" name="submit" value="Submit">
		</form>

		<?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $country = $_POST['country'];
                $message = $_POST['message'];
            
                // Insert the data into the table
                $sql = "INSERT INTO tbl_contact (name, email, phone, country, message)
                VALUES ('$name', '$email', '$phone', '$country', '$message')";
            
                if (mysqli_query($conn, $sql)) {

                    echo "<p class='success'>Data submitted successfully.</p>";
                } else {
                    echo "<p class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
                }
            
            }
            ?>
