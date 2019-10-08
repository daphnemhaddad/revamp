	<footer>
		<div> <!-- div helps seperate the copyright from the signup -->
			 <p>Copyright @ <?php
				 echo date('Y');
//			$startYear = 2019;
//			$thisYear = date('Y');
//			if ($startYear == $thisYear) {
//				echo $startYear;
//			} else {
//				echo "{$startYear}&ndash;{$thisYear}"; 
//			}
			 ?> - All Rights Reserved  -  
				<a href="sourcepage.php">Sources</a></p>
		</div>
 		<form method="post" action="Disco.php">
		<span class="signup"> Sign up for the latest news
		<br>
			  <label for="name">Full Name
				<?php if (in_array('name', $missing)) { ?>
					<span class="warning">Please enter your name</span>
				<?php } ?>
				</label>
               <input type="text" name="name" placeholder="Your Name here"
				<?php if ($missing || $errors) {
					echo 'value="' . htmlentities($name) . '"';
				} ?>>
			<br>
			
			<label for="address">Address
				<?php if (in_array('address', $missing)) { ?>
					<span class="warning">Please enter your address</span>
				<?php } elseif (isset($errors['email'])) { ?>
					<span class="warning">Invalid Address</span>
				<?php } ?>
				</label>
                <input type="text" name="address" placeholder="123 street"
				<?php if ($missing || $errors) {
					echo 'value="' . htmlentities($address) . '"';
				} ?>>
			<br>
			
			<label for="birthday">Date of Birth
				<?php if (in_array('birthday', $missing)) { ?>
					<span class="warning">Please enter your Date of Birth</span>
				<?php } elseif (isset($errors['email'])) { ?>
					<span class="warning">Invalid Email Address</span>
				<?php } ?>
				</label>
               <input type="date" name="birthday"
				<?php if ($missing || $errors) {
					echo 'value="' . htmlentities($birthday) . '"';
				} ?>>
			<br>
			
			<label for="email">Email Address
				<?php if (in_array('email', $missing)) { ?>
					<span class="warning">Please enter your email address</span>
				<?php } elseif (isset($errors['email'])) { ?>
					<span class="warning">Invalid Email Address</span>
				<?php } ?>
				</label>
                <input type="email" name="email" placeholder="Email@exmaple.com"
				<?php if ($missing || $errors) {
					echo 'value="' . htmlentities($email) . '"';
				} ?>>
			<br>
			
			<label for="comments">Any additional infomation you would like to leave?
				<?php if (in_array('comments', $missing)) { ?>
					<span class="warning">Please enter your comments</span>
				<?php } ?>
				</label>
                <input type="text" name="comments" class="letter"><?php
				if ($missing || $errors) {
					echo htmlentities($comments);
					
				} ?>
			</input>
			<br>
			
			By signing up, you agree to the TOS <input type="checkbox" name="terms">
			<br>
			
			<button>Submit</button>
			</span>
		</form>	
	</footer>


