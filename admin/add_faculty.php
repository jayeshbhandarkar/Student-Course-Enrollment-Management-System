<!-- PHP begin -->
<?php
					$id = "";
					$name = "";
					$contact = "";
					$email = "";
					$qualification = "";
					$course = "";
					$experience = "";
					
					$ftname = "";
					$ftcontact = "";
					$ftemail = "";
					$ftqualification = "";
					$ftcourse = "";
					$ftexperience = "";
					
					if(isset($_POST['submit']))
					{
					$id = $_POST['id'];
					$name = $_POST['name'];
					$contact = $_POST['contact'];
					$email = $_POST['email'];
					$qualification = $_POST['qualification'];
					$course = $_POST['course'];
					$experience = $_POST['experience'];
						
                    $er = 0;

					if($id == "")
					{
						$er++;
						$id = "*Required";
					}

						if($name == "")
						{
							$er++;
							$ftname = "*Required";
						}


						if($contact == "")
						{
							$er++;
							$ftcontact = "*Required";
						}
						else{
							$contact = test_input($contact);
							if(!preg_match("/^[+0-9]*$/",$contact)){
							$er++;
							$ftcontact = "*Only numbers are allowed";
							}
							
						}

						if($email == "")
						{
							$er++;
							$ftemail = "*Required";
						}
						else
						{
							$email = test_input($email);
							if(!filter_var($email, FILTER_VALIDATE_EMAIL))
							{
								$er++;
								$ftemail = "*Email format is invalid";
							}
							
						}
                        
                        if($qualification == "")
						{
							$er++;
							$ftqualification = "*Required";
						}

                        if($course == "")
						{
							$er++;
							$ftcourse = "*Required";
						}

                        if($experience == "")
						{
							$er++;
							$ftexperience = "*Required";
						}
						
						if($er == 0)
						{
                            /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
							
							$sql = "INSERT INTO FACULTY (id, name, contact, email, qualification, course, experience) VALUES (
							'".mysqli_real_escape_string($cn, strip_tags($id))."',
							'".mysqli_real_escape_string($cn, strip_tags($name))."',
							'".mysqli_real_escape_string($cn, strip_tags($contact))."', 
							'".mysqli_real_escape_string($cn, strip_tags($email))."', 
							'".mysqli_real_escape_string($cn, strip_tags($qualification))."', 
							'".mysqli_real_escape_string($cn, strip_tags($course))."', 
							'".mysqli_real_escape_string($cn, strip_tags($experience))."'
							)";
							
							if(mysqli_query($cn , $sql))
							{
								print '<span class = "successMessage">Faculty Registered Successfully !!</span>';
								$id = "";
								$name = "";
								$contact = "";
								$email = "";
								$qualification = "";
								$course = "";
								$experience = "";
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
					<h3>Faculty Registration Form</h3>
				</div>

				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="sname">faculty ID</label>
										<span class="error"><?php print $id; ?></span></h5>
										<p><input type="text" name="id" value="<?php print $id; ?>"></p>

										<h5><label for="sname">faculty name</label>
										<span class="error"><?php print $ftname; ?></span></h5>
										<p><input type="text" name="name" value="<?php print $name; ?>"></p>

										<h5><label for="contact">contact</label><span class="error">
												<?php print $ftcontact; ?></span></h5>
										<p><input type="text" name="contact" value="<?php print $contact; ?>"></p>

										<h5><label for="email">email</label><span class="error">
												<?php print $ftemail; ?></span></h5>
										<p><input type="text" name="email" value="<?php print $email; ?>"></p>

									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">

                                        <h5><label for="qualification">qualification</label><span class="error">
										<?php print $ftqualification; ?></span></h5>
										<p><input type="text" name="qualification" value="<?php print $qualification; ?>"></p>

										<h5><label for="course">course</label></h5>
										<p><select name="course" id="">
												<option value="">select</option>
                                                <option value="Artificial Intelligence">Artificial Intelligence</option>
												<option value="Machine Learning">Machine Learning</option>
												<option value="Data Science">Data Science</option>
												<option value="Web Development">Web Development</option>
												<option value="Cloud Computing">Cloud Computing</option>
												<option value="Android Development">Android Development</option>
											</select><span class="error">
												<?php print $ftcourse; ?></span></p>

                                        <h5><label for="experience">experience</label><span class="error">
										<?php print $ftexperience; ?></span></h5>
										<p><input type="text" name="experience" value="<?php print $experience; ?>"></p>

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