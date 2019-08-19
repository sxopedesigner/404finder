<!DOCTYPE html>
<html>
<head>
	<title>Check URL</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="submit.php" method="POST">
			<label class="label">INPUT URL HERE</label>
			<input class="form-control form-control-sm" type="url" name="url" id="url" required>	

			<button type="submit" class="btn btn-sm btn-success">Submit</button>
			<button type="reset" class="btn btn-sm btn-danger">Clear</button>
			</form>
		</div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/inputmask/bindings/inputmask.binding.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		   
	});
</script>
</html>