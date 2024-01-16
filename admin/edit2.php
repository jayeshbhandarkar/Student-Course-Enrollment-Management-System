<?php
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

    $sql = "select * from faculty where id = ".$_GET['eid'];
    $table = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($table);
					
	if(isset($_POST['submit']))
	{
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$qualification = $_POST['qualification'];
	$course = $_POST['course'];
	$experience = $_POST['experience'];
						
    $er = 0;
						
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
	else
    {
		$contact = test_input($contact);
		if(!preg_match("/^[+0-9]*$/",$contact))
        {
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
            $sql = "update faculty set name = '".strip_tags($name)."', 
            contact = '".strip_tags($contact)."',
            email = '".strip_tags($email)."',
            qualification = '".strip_tags($qualification)."',
            course = '".strip_tags($course)."',
            experience = ".strip_tags($experience)." where id = ".$_GET['eid'];
            
            if(mysqli_query($cn, $sql))
            {
                print '<span class = "successMessage">Faculty Details Update Successfully !!</span>';
                $row['name'] = "";
                $row['contact'] = "";
                $row['email'] = "";
                $row['qualification'] = "";
                $row['course'] = "";
                $row['experience'] = "";
            }
            else
            {
                print '<span>'.mysqli_error($cn).'</span>';
            }
        }
    }
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div class="form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 id="et">Please Edit
                        <?php print $row["name"]; ?>'s Information</h3>
                </div>
                <div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">

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

										<p><input type="submit" name="submit" value="Save Changes"></p>
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
