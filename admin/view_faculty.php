<div id="padding">
<div class="section-title">
    <h3>Faculties list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Faculty Details Deleted Successfully !!</h6>';
        }
               
                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "select * from faculty";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>Faculty ID</th><th>Faculty Name</th><th>Contact</th><th>Email</th><th>Qualification</th><th>Course</th><th>Experience</th><th>Action</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["id"]).'</td>';
					print '<td>'.htmlentities($row["name"]).'</td>';
					print '<td>'.htmlentities($row["contact"]).'</td>';
					print '<td>'.htmlentities($row["email"]).'</td>';
					print '<td>'.htmlentities($row["qualification"]).'</td>';
					print '<td>'.htmlentities($row["course"]).'</td>';
					print '<td>'.htmlentities($row["experience"]).'</td>';
					print '<td> <a class= "action-e" href= "?a=edit2&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
	
				print '</table>';

    function delete()
        {
            global $cn;
            $sql = "delete from faculty where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
     
</div>