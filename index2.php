<!DOCTYPE html>
<html>
<head>
	<title>Auto-Suggest Dropdown Example</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			// Event handler for district dropdown
			$("#district").change(function(){
				var district = $(this).val();
				// Send an AJAX request to fetch villages for the selected district
				$.ajax({
					type: "POST",
					url: "get_villages.php",
					data: { district: district },
					dataType: "json",
					success: function(data){
						// Clear the villages dropdown
						$("#villages").empty();
						// Populate the villages dropdown with the fetched data
						$.each(data, function(index, village){
							$("#villages").append('<option value="' + village + '">' + village + '</option>');
						});
					}
				});
			});

			// Event handler for village dropdown
			$("#villages").change(function(){
				var village = $(this).val();
				alert("You selected " + village);
			});
		});
	</script>
</head>
<body>
	<h1>Auto-Suggest Dropdown Example</h1>
	<label for="district">Select District:</label>
	<select id="district">
		<option value="Erode">Erode</option>
		<option value="Krishnagiri">Krishnagiri</option>
	</select>
	<br>
	<label for="villages">Select Village:</label>
	<select id="villages">
		<option>Select a district first</option>
		<option>Perodu</option>
		<option>Chithode</option>
		<option>Nochipalayam</option>
		<option>Ellapalyam</option>
		<option>Gangapuram</option>
		<option>thottani</option>
		<option>thindal</option>
	    <option>Rayapalyam</option>
		<option>Moolakarai</option>
		

	</select>
</body>
</html>
