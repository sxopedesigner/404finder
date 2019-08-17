<?php $searchmeta1 = get_meta_tags("http://cypherox.com"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
   <title>Meta Tag Finder</title>
</head>
<body>
<div>
	<h1>Meta Tag</h1>
	<h2>Author:</h2>
	<?php echo isset($searchmeta1["author"]); ?>

	<h2>Copyright:</h2>
	<?php echo isset($searchmeta1["copyright"]); ?>

	<h2>Description:</h2>
	<?php if(isset($searchmeta1["description"])){
		echo $searchmeta1["description"];
	}
	 ?>

	<h2>Keywords:</h2>
	<?php echo isset($searchmeta1["keywords"]); ?>

	<h2>Robots:</h2>
	<?php echo isset($searchmeta1["robots"]); ?>

	<h2>Generator:</h2>
	<?php echo isset($searchmeta1["generator"]); ?>
</body>
</html>