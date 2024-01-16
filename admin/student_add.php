<!-- PHP begin -->
<?php
					$id = "";
					$sname = "";
					$contact = "";
					$email = "";
					$address = "";
					$class = "";
					$category = "";
					$gender = "";
					$city = "";
					
					$esname = "";
					$econtact = "";
					$eemail = "";
					$eaddress = "";
					$eclass = "";
					$ecategory = "";
					$egender = "";
					$ecity = "";
					
					if(isset($_POST['submit']))
					{
					$id = $_POST['id'];
					$sname = $_POST['sname'];
					$contact = $_POST['contact'];
					$email = $_POST['email'];
					$address = $_POST['address'];
					$class = $_POST['class'];
					$category = $_POST['category'];
						
					//if(isset($_POST['gender']))
					$gender = $_POST['gender'];
						
					$city = $_POST['city'];
						
					$er = 0;
						
					if($id == "")
					{
						$er++;
						$id = "*Required";
					}

						if($sname == "")
						{
							$er++;
							$esname = "*Required";
						}


						if($contact == "")
						{
							$er++;
							$econtact = "*Required";
						}
						else{
							$contact = test_input($contact);
							if(!preg_match("/^[+0-9]*$/",$contact)){
							$er++;
							$econtact = "*Only numbers are allowed";
							}
							
						}

						if($email == "")
						{
							$er++;
							$eemail = "*Required";
						}
						else
						{
							$email = test_input($email);
							if(!filter_var($email, FILTER_VALIDATE_EMAIL))
							{
								$er++;
								$eemail = "*Email format is invalid";
							}
							
						}

						if($address == "")
						{
							$er++;
							$eaddress = "*Required";
						}

						if($class == "")
						{
							$er++;
							$eclass = "*Required";
						}

						if($category == 0)
						{
							$er++;
							$ecategory = "*Please select category";
						}

						if (empty($gender)) 
						{
						 	$er++;
						    $egender = "*Gender is required";
						}
						else 
						{
						    $gender = test_input($gender);
						}

						if($city == 0)
						{
							$er++;
							$ecity = "*Please select City";
						}
						
						if($er == 0)
						{
                            /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
							
							$sql = "INSERT INTO STUDENT (id, sname, contact, email, address, class, category, gender, city) VALUES (
							'".mysqli_real_escape_string($cn, strip_tags($id))."',
							'".mysqli_real_escape_string($cn, strip_tags($sname))."',
							'".mysqli_real_escape_string($cn, strip_tags($contact))."', 
							'".mysqli_real_escape_string($cn, strip_tags($email))."', 
							'".mysqli_real_escape_string($cn, strip_tags($address))."', 
							'".mysqli_real_escape_string($cn, strip_tags($class))."', 
							".mysqli_real_escape_string($cn, strip_tags($category)).", 
							'".mysqli_real_escape_string($cn, strip_tags($gender))."',  
							".mysqli_real_escape_string($cn, strip_tags($city))."
							)";
							
							if(mysqli_query($cn , $sql))
							{
								print '<span class = "successMessage">Form Submitted Successfully !!</span>';
								$id = "";
								$sname = "";
								$contact = "";
								$email = "";
								$address = "";
								$class = "";
								$category = "";
								$gender = "";
								$city = "";
									
							}
							else
							{
								print '<span class= "errorMessage">'.mysqli_error($cn).'</span>';
							}
						}
						else
						{
							print '<span class = "errorMessage">Please fill all the required fields correctly.</span>';
						}
					}
					
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
					
// PHP End	
?>

<div class="form-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h3>Admission form</h3>
				</div>

				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="sname">ID</label>
										<span class="error"><?php print $id; ?></span></h5>
										<p><input type="text" name="id" value="<?php print $id; ?>"></p>

										<h5><label for="sname">Name</label>
										<span class="error"><?php print $esname; ?></span></h5>
										<p><input type="text" name="sname" value="<?php print $sname; ?>"></p>

										<h5><label for="contact">contact</label><span class="error">
												<?php print $econtact; ?></span></h5>
										<p><input type="text" name="contact" value="<?php print $contact; ?>"></p>

										<h5><label for="email">email</label><span class="error">
												<?php print $eemail; ?></span></h5>
										<p><input type="text" name="email" value="<?php print $email; ?>"></p>

										<h5><label for="address">address</label><span class="error">
												<?php print $eaddress; ?></span></h5>
										<p><textarea name="address"><?php print $address; ?></textarea></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">
										<h5><label for="class">class</label><span class="error">
												<?php print $eclass; ?></span></h5>
										<p><input type="text" name="class" value="<?php print $class; ?>"></p>

										<h5><label for="category">category</label></h5>
										<p><select name="category" id="">
												<option value="0">select</option>
												<option value="1">OPEN</option>
												<option value="2">OBC</option>
												<option value="3">NT</option>
												<option value="4">SC</option>
												<option value="5">ST</option>
												<option value="6">Other</option>
											</select><span class="error">
												<?php print $ecategory; ?></span></p>

										<h5><label for="gender">Gender</label></h5>
										<input type="radio" name="gender" value="male"><span>Male</span>
										<input type="radio" name="gender" value="female"><span>Female</span>
										<span class="error">
											<?php print $egender; ?></span>

										<h5><label for="city">City</label></h5>
										<p><select name="city" id="">
												<option value="0">select</option>
												<option value="1">Mumbai</option>
												<option value="2">Pune</option>
												<option value="3">Nashik</option>
												<option value="4">Dhule</option>
												<option value="5">Other</option>
											</select><span class="error">
											<?php print $ecity; ?></span></p>

										<p><input type="submit" name="submit" value="Submit"></p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>