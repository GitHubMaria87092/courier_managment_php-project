<!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>


<div class="container">
	<div class="table-responsive" id="mydiv"></div>
</div>

	<form id="fupForm" name="form1">
		
		<div class="form-group">
			<label for="student_name"> Name:</label>
			<input type="text" class="form-control" id="student_name" placeholder="Name" >
		</div>
	
	
		<input type="button" class="btn btn-primary" value="Save to database" id="butsave">
	</form>
</div>
 


<script>
$(document).ready(function() {

	function get_data() {
		$.ajax({
			url: "select.php",
			method: "POST",
			success: function(data) {
          
				$('#mydiv').html(data); 
			}
		});
	}

	get_data();





	$('#butsave').on('click', function(e) {
		e.preventDefault();
		var catname = $('#student_name').val();

			$.ajax({
				url: "save.php",
				method: "POST",
				data: {
				name: catname,
				},
		
				success: function(data) {
					$('#student_name').val('');

			if(data==1)
				{
					get_data();
				}

				else{
					alert('cant save record');
				}
				}
			});
		
	});
});

</script>
</body>
</html>
