<?php

$con = mysqli_connect("127.0.0.1:3307","root","","udemy_courses");

if(!($con))
{
	die("Error in connecting to database");
} 

else
{              
		$query="SELECT * FROM courses ORDER BY course_id DESC";
		$run=mysqli_query($con,$query);
		if($run && mysqli_num_rows($run)>0)
		{
			 while ($row = mysqli_fetch_assoc($run)) {
        
			 	echo '<div class=" col-md-4 col-sm-6 col-xs-12">';
			 	echo '<div class="course">';
        echo '<h2>' . $row['course_name'] . '</h2>';  
        // echo '<img src="' . $row['course_image'] . '" alt="' . $row['course_name'] . '">';
        // echo '<a href="' . $row['course_link'] . '" target="_blank">Go to Course</a>'; // Add the course link
        echo '<a href="' . $row['course_link'] . '" target="_blank">';
        echo '<button>View Course</button>';
        echo '</a>'; 
        echo '</div>';
        echo '</div>';
			 }
		}	
}
mysqli_close($con);

?>