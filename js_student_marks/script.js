// Declaring GLOBAL variables to use throughout program
var form = document.getElementById("student_form");

form.addEventListener('submit', function(event) {
	event.preventDefault();
	
	var student_id = String(document.getElementById("student_id_input").value);
	var student_name = String(document.getElementById("student_name_input").value);
	var select_subject = String(document.getElementById("select_subject").value);
	var select_subject_code = parseInt(document.getElementById("select_subject_code").value);
	var internal_marks = parseInt(document.getElementById("internal_marks_input").value);
	var external_marks = parseInt(document.getElementById("external_marks_input").value);

	var total_marks = internal_marks + external_marks;

	document.getElementById("student_id").innerHTML = student_id;
	document.getElementById("student_name").innerHTML = student_name;
	document.getElementById("subject_code").innerHTML = select_subject_code;
	document.getElementById("subject_name").innerHTML = select_subject;
	document.getElementById("internal_marks").innerHTML = internal_marks;
	document.getElementById("external_marks").innerHTML = external_marks;
	document.getElementById("total").innerHTML = total_marks;
});
