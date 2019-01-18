<?php require_once('admin/scripts/read.php');?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movie Review</title>
</head>
<body>
	<header>
		<h1>Header</h1>
		<nav>
			<ul>
				<li><a href="#">Action</a></li>
				<li><a href="#">Comedy</a></li>
			</ul>
		</nav>
	</header>

<?php 
	$results = getAll('tbl_movies');
	while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
	<?php //TODO:Use the following code example to load
		  // at least three more columns with proper HTML tags ?>
		<div>
			<h2><?php echo $row['movies_title'];?></h2>
			<p><?php echo $row['movies_year'];?></p>
			<img src="images/<?php echo $row['movies_cover'];?>" alt="">
		</div>
	<?php endwhile;?>
	<footer>
		<p>This is a footer Copyright - 2019</p>
	</footer>
</body>
</html>