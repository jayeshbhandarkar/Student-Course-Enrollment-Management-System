<?php
    $fname = "";
    $branch = "";
    $class = "";
    $course = "";
					
    $efname = "";
    $ebranch = "";
    $eclass = "";
    $ecourse = "";

    $sql = "select * from enroll where id = ".$_GET['eid'];
    $table = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($table);
					
	if(isset($_POST['submit']))
	{
	$fname = $_POST['fname'];
	$branch = $_POST['branch'];
	$class = $_POST['class'];
						
	if(isset($_POST['course']))
	    $course = $_POST['course'];
						
    $er = 0;
						
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
            $sql = "update enroll set fname = '".strip_tags($fname)."', 
            branch = '".strip_tags($branch)."',
            class = '".strip_tags($class)."',
            course = '".strip_tags($course)."' where id = ".$_GET['eid'];
            
            if(mysqli_query($cn, $sql))
            {
                print '<span class = "successMessage">Enrollment Details Updated Successfully !!</span>';
                $row['fname'] = "";
                $row['branch'] = "";
                $row['class'] = "";
                $row['course'] = "";
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
                        <?php print $row["fname"]; ?>'s Course Enrollment Information</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left-side-form">
                                        <h5><label for="fname">Student Name</label>
                                            <span class="error">
                                                <?php print $efname; ?></span></h5>
                                        <p><input type="text" name="fname" value="<?php print $row['fname']; ?>"></p>

                                        <h5><label for="branch">Branch</label><span class="error">
                                                <?php print $ebranch; ?></span></h5>
                                        <p><input type="text" name="branch" value="<?php print $row['branch']; ?>"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right-side-form">
                                        <h5><label for="class">class</label><span class="error">
                                                <?php print $eclass; ?></span></h5>
                                        <p><input type="text" name="class" value="<?php print $row['class']; ?>"></p>

                                        <h5><label for="course">Course</label></h5>
                                        <input type="radio" name="course" value="ai"><span>Artificial Intelligence</span>
                                        <input type="radio" name="course" value="ml"><span>Machine Learning</span>
                                        <input type="radio" name="course" value="ds"><span>Data Science</span><br>
                                        <input type="radio" name="course" value="wd"><span>Web Development</span>
                                        <input type="radio" name="course" value="cc"><span>Cloud Computing</span>
                                        <input type="radio" name="course" value="ad"><span>Android Development</span>

                                        <span class="error">
                                            <?php print $ecourse; ?></span>

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
