<?php
	// Line Comment
	# Line Comment
	/* Block Comment */

	/*
	$string = "This is a variable";
	$String = "Variables are case-sensitive";
	$_string = "Variables must start with a letter or underscore";
	$number = 10;
	$boolean = false;
	$array = array(1, true, "three");

	echo "Echo inserts basic text into HTML. ";
	echo("There are two ways to type the syntax. ");
	echo $string;

	print(". Print is an alternative to echo, but they are exactly the same, ");
	print "syntax included. ";

	var_dump("Var Dump is a function to print variables with type and length, used for debugging");
	var_dump($array);
	*/

	// die("Die ends the execution of the file. Everything below this line will not be rendered.");

	$list = array("Apples", "Bananas", "Pears");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Intro</title>
	</head>
	<body>
		<h1 class="heading-1 <?php echo "php-can-be-written-anywhere"; ?>">PHP Running</h1>
		<?php echo "<h2>Echo/Print can also be used to print HTML</h2>"; ?>
		<h2><?php echo $String; ?></h2>
		<h3><?= "This is shorthand for php echo, other php cannot be written in this syntax"; ?></h3>

		<ul>
			<?php
				foreach ($list as $listItem){
					echo "<li>".$listItem."</li>";
				}
			?>
		</ul>
		<ul>
			<?php foreach ($list as $listItem): ?>
			<li><?= $listItem; ?></li>
			<?php endforeach; ?>
		</ul>

		<?php
			$scores = array(0,58,15,89,100,45,54);
		?>
		<h2>The total number of people are <?= count($scores); ?></h2>
		<ul>
			<?php foreach ($scores as $score): ?>
			<li>This person got <?= $score; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php
			$totalScore = 0;

			foreach ($scores as $score){
				$totalScore += $score;
			}

			$averageScore = $totalScore / count($scores);
		?>
		<h3>The average score is <?= $averageScore ?></h3>

		<?php if($averageScore > 50): ?>
			<p>The class has passed</p>
		<?php else: ?>
			<p>The class has failed</p>
		<?php endif; ?>
	</body>
</html>
