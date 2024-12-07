<html>
	<head>
	  <title>PHP student Marks</title>
	  <link rel="stylesheet" href="./style.css">
	</head>

	<body>
		<div class="container">
			<div class="form_container">
               <h1>Student Details</h1>
			   <form method="POST">
				<input
				  type="text"
				  name="student_id"
				  placeholder="e.g. 24MCV001"
				/>

				<input
				  type="text"
				  name="student_name"
				  placeholder="e.g. Rahul Sharma" 
				/>
				
				<select name="subject_name" >  
					<option value="select_Subject_name">Select Subject</option>
					<option value="Basic_Mathematics">Basic Mathematics</option>
					<option value="FCO">FCO</option>
					<option value="C_Programming">C Programming</option>
					<option value="OOP_Java">OOPS with Java</option>
					<option value="Web_Technology">Web Technology</option>
				</select>

				<select name="subject_code"> 
					<option value="select_Subject_code">Select Subject Code</option>
					<option value="123">123</option>
					<option value="456">456</option>
					<option value="789">789</option>
					<option value="012">012</option>
					<option value="345">345</option>
				</select>

				<input 
				  type="number"
				  name="internal_marks"
				  placeholder="Internal Marks"
				/>	

				<input
				  type="number"
				  name="external_marks"
				  placeholder="External Marks"
				/>

				<button type="submit" name="form_button">Add Record</button>
			   </form>	
			</div>
		</div>

      <div class="result_container">
		<?php

			if(isset($_POST["form_button"])){			      
				$student_id = $_POST["student_id"];
				$student_name = $_POST["student_name"];
				$subject_name = $_POST["subject_name"];
				$subject_code = $_POST["subject_code"];
				$internal_marks = $_POST["internal_marks"];
				$external_marks = $_POST["external_marks"];

				echo "$student_id <br>";
				echo "$student_name <br>";
				echo "$subject_name <br>";
				echo "$subject_code <br>";
				echo "$internal_marks <br>";
				echo "$external_marks <br>";
			} else {
				echo "Fill up Details";
			}
		?>
      </div>

	</body>

</html>
