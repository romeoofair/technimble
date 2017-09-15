<?php

	include('includes/connection.php');

	include('includes/functions.php');

	if( isset( $_POST['register'])) {
		
		//set all variable to empty by default
		$fname = $mname = $lname = $fname2 = $mname2 = $lname2 = $fname3 = $mname3 = $lname3 = $fname4 = $mname4 = $lname4 = $email = $cname = $regno = $branch = $year = $phno = $event = $comments = "";
		
		$error = "";
		
		// check to see if inputs are empty
		// create variables with form data
		// wrap the data with our function
		
		if( $_POST["radio"] == '1' ) {
            
            if( !$_POST["fname"] ) {
			
			$error .= "&#9679; First name &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["lname"] ) {

                $error .= "&#9679; Last name &nbsp;";

            }  else {

                $lname = validateFormData( $_POST["lname"] );

            }

            
        } else if( $_POST["radio"] == '2' ) {
            
            if( !$_POST["fname"] ) {
			
			$error .= "&#9679; First name &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["lname"] ) {

                $error .= "&#9679; Last name &nbsp;";

            }  else {

                $lname = validateFormData( $_POST["lname"] );

            }
            
            if( !$_POST["fname2"] ) {
			
			$error .= "&#9679; First name2 &nbsp;";
			
            } else {

                $fname2 = validateFormData( $_POST["fname2"] );

            }

            if( !$_POST["lname2"] ) {

                $error .= "&#9679; Last name2 &nbsp;";

            }  else {

                $lname2 = validateFormData( $_POST["lname2"] );

            }
            
        } else if( $_POST["radio"] == '3' ) {
            
            if( !$_POST["fname"] ) {
			
			$error .= "&#9679; First name &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["lname"] ) {

                $error .= "&#9679; Last name &nbsp;";

            }  else {

                $lname = validateFormData( $_POST["lname"] );

            }
            
            if( !$_POST["fname2"] ) {
			
			$error .= "&#9679; First name2 &nbsp;";
			
            } else {

                $fname2 = validateFormData( $_POST["fname2"] );

            }

            if( !$_POST["lname2"] ) {

                $error .= "&#9679; Last name2 &nbsp;";

            }  else {

                $lname2 = validateFormData( $_POST["lname2"] );

            }
            
            if( !$_POST["fname3"] ) {

                $error .= "&#9679; First name3 &nbsp;";

            } else {

                $fname3 = validateFormData( $_POST["fname3"] );

            }

            if( !$_POST["lname3"] ) {

                $error .= "&#9679; Last name3 &nbsp;";

            }  else {

                $lname3 = validateFormData( $_POST["lname3"] );

            }

        } else if( $_POST["radio"] == '4' ) {
            
            if( !$_POST["fname"] ) {
			
			$error .= "&#9679; First name &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["lname"] ) {

                $error .= "&#9679; Last name &nbsp;";

            }  else {

                $lname = validateFormData( $_POST["lname"] );

            }
            
            if( !$_POST["fname2"] ) {
			
			$error .= "&#9679; First name2 &nbsp;";
			
            } else {

                $fname2 = validateFormData( $_POST["fname2"] );

            }

            if( !$_POST["lname2"] ) {

                $error .= "&#9679; Last name2 &nbsp;";

            }  else {

                $lname2 = validateFormData( $_POST["lname2"] );

            }
            
            if( !$_POST["fname3"] ) {

                $error .= "&#9679; First name3 &nbsp;";

            } else {

                $fname3 = validateFormData( $_POST["fname3"] );

            }

            if( !$_POST["lname3"] ) {

                $error .= "&#9679; Last name3 &nbsp;";

            }  else {

                $lname3 = validateFormData( $_POST["lname3"] );

            }
            
            if( !$_POST["fname4"] ) {

                $error .= "&#9679; First name4 &nbsp;";

            } else {

                $fname4 = validateFormData( $_POST["fname4"] );

            }

            if( !$_POST["lname4"] ) {

                $error .= "&#9679; Last name4 &nbsp;";

            }  else {

                $lname4 = validateFormData( $_POST["lname4"] );

            }
            
        }
		
		
		
		if( !$_POST["email"] ) {
			
			$error .= "&#9679; Email &nbsp;";
			
		}  else {
			
			$email = validateFormData( $_POST["email"] );
		}
		
		if( !$_POST["cname"] ) {
			
			$error .= "&#9679; College name &nbsp;";
			
		}  else {
			
			$cname = validateFormData( $_POST["cname"] );
			
		}
		
		if( !$_POST["regno"] ) {
			
			$error .= "&#9679; Registration no &nbsp;";
			
		}  else {
			
			$regno = validateFormData( $_POST["regno"] );
			
		}
		
		if( !$_POST["branch"] ) {
			
			$error .= "&#9679; Branch &nbsp;";
			
		}  else {
			
			$branch = validateFormData( $_POST["branch"] );
			
		}
		
		if( !$_POST["year"] ) {
			
			$error .= "&#9679; Year &nbsp;";
			
		}  else {
			
			$year = validateFormData( $_POST["year"] );
			
		}
		
		if( !$_POST["phno"] ) {
			
			$error .= "&#9679; Phone no &nbsp;";
			
		}  else {
			
			$phno = validateFormData( $_POST["phno"] );
			
		}
		
		if( !$_POST["event"] ) {
			
			$error .= "&#9679; Event interested &nbsp;";		
			
		} else {
			
					$event = validateFormData( $_POST["event"] );
		}
		
		// optional inputs
		$mname = validateFormData( $_POST["mname"] );
		$mname2 = validateFormData( $_POST["mname2"] );
		$mname3 = validateFormData( $_POST["mname3"] );
		$mname4 = validateFormData( $_POST["mname4"] );
		$comments = validateFormData( $_POST["comments"] );

		if($error != "") {
			
			$error = "<br><br><br><p>The following fields are required:<p>".$error;
			
		} else {
			
			$query = "SELECT id FROM `users` WHERE email = '".$email."'";
			
			$result = mysqli_query($conn, $query);
			
			if (mysqli_num_rows($result) > 0) {
				
				$error = "<br><br><br><p>This email address is taken.<p>";
				
			} else {
				
				$name = $fname." ".$mname." ".$lname;
				$name2 = $fname2." ".$mname2." ".$lname2;
				$name3 = $fname3." ".$mname3." ".$lname3;
				$name4 = $fname4." ".$mname4." ".$lname4;

								
				$query = "INSERT INTO `users` (`id`, `name`, `name2`, `name3`, `name4`, `email`, `clgname`, `regno`, `branch`, `year`, `phno`, `event`, `comments`, `reg_time`) VALUES (NULL, '$name', '$name2', '$name3', '$name4', '$email', '$cname', '$regno', '$branch', '$year', '$phno', '$event', '$comments', CURRENT_TIMESTAMP)";
				
				$result = mysqli_query( $conn, $query );
				
				
				if( $result ) {
					
					header("Location: index.php?alert=success");
					
				} else {
					
					echo "Error: ". $query . "<br>" . mysqli_error($conn);
				}
				
			}
			
		}
	}

 mysqli_close($conn);
   	

include('includes/header.php');	
	
?>

	<div class="alert alert-danger" role="alert" id="error" ><?php echo $error; ?><a class="close" data-dismiss="alert">&times;</a></div>


		<h1 id="register">Registration</h1>

		 <div class="container-fluid row" id="regform">

			<h3>Personal details</h3> 
			 <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">	

				<div id="perteam">	
					<label id="perteamname" >Number of participants in the team:&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label class="custom-control custom-radio">
					  <input id="radio1" name="radio" type="radio" class="custom-control-input" checked value="1">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">&nbsp;&nbsp;1</span>
					</label>
					<label class="custom-control custom-radio">
					  <input id="radio2" name="radio" type="radio" class="custom-control-input" value="2">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">&nbsp;&nbsp;2</span>
					</label>
					<label class="custom-control custom-radio">
					  <input id="radio3" name="radio" type="radio" class="custom-control-input" value="3">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">&nbsp;&nbsp;3</span>
					</label>
					<label class="custom-control custom-radio">
					  <input id="radio4" name="radio" type="radio" class="custom-control-input" value="4">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">&nbsp;&nbsp;4</span>
					</label>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						<label class="sr-only" for="fname">First name</label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
					</div>

					<div class="form-group">
						<label class="sr-only" for="fname2">First name</label>
						<input type="text" class="form-control" id="fname2" name="fname2" placeholder="First name">
					</div>

					<div class="form-group">
						<label class="sr-only" for="fname3">First name</label>
						<input type="text" class="form-control" id="fname3" name="fname3" placeholder="First name">
					</div>

					<div class="form-group">
						<label class="sr-only" for="fname4">First name</label>
						<input type="text" class="form-control" id="fname4" name="fname4" placeholder="First name">
					</div>

					<div class="form-group">
						<label class="sr-only" for="email">Email address</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					</div>

					<div class="form-group">
						<label class="sr-only">Branch</label>
						<select class="custom-select" name="branch">
						  <option disabled selected>Choose your branch</option>
                          <optgroup label="B.Tech">
                              <option value="CSE">CSE</option>
                              <option value="ECE">ECE</option>
                              <option value="EEE">EEE</option>
                              <option value="ME">ME</option>
                              <option value="CE">CE</option>
                          </optgroup>
						  <option value="M.Tech">M.Tech</option>
						  <option value="M.B.A">M.B.A</option>
						  <option value="M.C.A">M.C.A</option>
						</select>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						<label class="sr-only" for="mname">Middle name</label>
						<input type="text" class="form-control" id="mname" name="mname" placeholder="Middle name (optional)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="mname2">Middle name</label>
						<input type="text" class="form-control" id="mname2" name="mname2" placeholder="Middle name (optional)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="mname3">Middle name</label>
						<input type="text" class="form-control" id="mname3" name="mname3" placeholder="Middle name (optional)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="mname4">Middle name</label>
						<input type="text" class="form-control" id="mname4" name="mname4" placeholder="Middle name (optional)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="cname">College name</label>
						<input type="text" class="form-control" id="cname" name="cname" placeholder="College name">
					</div>

					<div class="form-group">
						<label class="sr-only">Year</label>
						<select class="custom-select" name="year">
						  <option disabled selected>Choose your year</option>
						  <option value="1">I</option>
						  <option value="2">II</option>
						  <option value="3">III</option>
						  <option value="4">IV</option>
						</select>
					</div>
				</div>  

				<div class="col-sm-4">
					<div class="form-group">
						<label class="sr-only" for="lname">Last name</label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name (surname)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="lname2">Last name</label>
						<input type="text" class="form-control" id="lname2" name="lname2" placeholder="Last name (surname)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="lname3">Last name</label>
						<input type="text" class="form-control" id="lname3" name="lname3" placeholder="Last name (surname)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="lname4">Last name</label>
						<input type="text" class="form-control" id="lname4" name="lname4" placeholder="Last name (surname)">
					</div>

					<div class="form-group">
						<label class="sr-only" for="regno">Registration no</label>
						<input type="text" class="form-control" id="regno" name="regno" placeholder="Registration no">
					</div>

					<div class="form-group">
						<label class="sr-only" for="phno">Phone no</label>
						<input type="number" class="form-control" id="phno" name="phno" placeholder="Phone no">
					</div>				
				</div> 

				<section id="events"> 
					<label id="inter">Event Interested:</label>
					<label class="custom-control custom-radio">
					  <input type="radio" name="event" value="Paper Presentation" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Paper Presentation</span>
					</label>
					<label class="custom-control custom-radio">
					  <input type="radio" name="event" class="custom-control-input" value="Poster Presentation">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Poster Presentation</span>
					</label>
					<label class="custom-control custom-radio">
					  <input type="radio" name="event" class="custom-control-input" value="Robo Race">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Robo Race</span>
					</label>
					<label class="custom-control custom-radio">
					  <input type="radio" name="event" class="custom-control-input" value="Movie Making">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Movie Making</span>
					</label>
				<!--	<label class="custom-control custom-radio">
					  <input type="radio" name="event" class="custom-control-input" value="Lan Gaming">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Lan Gaming</span>
					</label> -->
				</section>

				<div class="form-group form-inline" id="comment">
					<label for="comments">Comments</label>
					<textarea class="form-control" id="comments" rows="3" cols="100" name="comments" placeholder="Leave your suggestions here (optional)"></textarea>
				</div>

			   <button type="submit" class="btn btn-primary" name="register">Submit</button>

		 </form>
	 </div>


<?php 
   	include('includes/footer.php');
?>