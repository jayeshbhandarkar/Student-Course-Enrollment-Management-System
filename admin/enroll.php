<?php
    $id = "";
    $fname = "";
    $branch = "";
    $class = "";
    $course = "";
					
    $efname = "";
    $ebranch = "";
    $eclass = "";
    $ecourse = "";
					
	if(isset($_POST['submit']))
	{
	
	$id = $_POST['id'] ;
    $fname = $_POST['fname'];
    $branch = $_POST['branch'] ;
	$class = $_POST['class'];
						
	if(isset($_POST['course']))
	$course = $_POST['course'];
						
    $er = 0;

    if($id == "")
    {
        $er++;
        $id = "*Required";
    }					
    if($fname == "")
    {
        $er++;
        $efname = "*Required";
    }

    if($branch == "")
    {
        $er++;
        $ebranch = "*Required";
    }

    if($class == "")
    {
        $er++;
        $eclass = "*Required";
    }

    if (empty($course))
    {
        $er++;
        $ecourse = "*Course is required";
    } 
    else 
    {
        $course = test_input($course);
    }

        if($er == 0)
		{
            /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
							
			$sql = "INSERT INTO enroll (id ,fname, branch, class, course) VALUES (
            '".mysqli_real_escape_string($cn, strip_tags($id))."',
			'".mysqli_real_escape_string($cn, strip_tags($fname))."',
            '".mysqli_real_escape_string($cn, strip_tags($branch))."',  
		    '".mysqli_real_escape_string($cn, strip_tags($class))."',  
			'".mysqli_real_escape_string($cn, strip_tags($course))."'
			)";
            
            if(mysqli_query($cn, $sql))
            {
                print '<span class = "successMessage">You Enrolled for the Course Successfully !!</span>';
                $id = "";
                $fname = "";
                $branch = "";
                $class = "";
                $course= "";
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
					<h3>Course Enrollment Form</h3>
				</div>

				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
                                    <h5><label for="lname">Student Id</label><span class="error">
												<?php print $id; ?></span></h5>
										<p><input type="text" name="id" value="<?php print $id; ?>"></p>

                                    <h5><label for="fname">Student Name</label>
										<span class="error"><?php print $efname; ?></span></h5>
										<p><input type="text" name="fname" value="<?php print $fname; ?>"></p>

                                        <h5><label for="branch">Branch</label><span class="error">
												<?php print $ebranch; ?></span></h5>
										<p><input type="text" name="branch" value="<?php print $branch; ?>"></p>

									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">
                                    <h5><label for="class">class</label><span class="error">
												<?php print $eclass; ?></span></h5>
										<p><input type="text" name="class" value="<?php print $class; ?>"></p>

                                        <h5><label for="course">Course</label></h5>
                                        <input type="radio" name="course" value="ai"><span>Artificial Intelligence</span>
                                        <input type="radio" name="course" value="ml"><span>Machine Learning</span>
                                        <input type="radio" name="course" value="ds"><span>Data Science</span><br>
                                        <input type="radio" name="course" value="wd"><span>Web Development</span>
                                        <input type="radio" name="course" value="cc"><span>Cloud Computing</span>
                                        <input type="radio" name="course" value="ad"><span>Android Development</span>

                                        <span class="error">
                                            <?php print $ecourse; ?></span>

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