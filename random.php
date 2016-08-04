<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Random Hero selector</title>
	<?php include 'db.php' ?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="../heroes/styleFor7.css">
	<script src="/heroes/jquery-1.11.3.min.js"></script>
	<script src="/heroes/toggleCbs.js"></script>
</head>
<body>
<div class="main">
	<div class="upper">
		<div class="columnRole">
			<input type="checkbox" class="hidden meta" name="Assassins" id="Assassins" value="Assassin" checked>
				<label for="Assassins"><img src=icons/class/IconAssassin.png title="Assassin"></label>
			<input type="checkbox" class="hidden meta" name="Specialists" id="Specialists" value="Specialist" checked >
				<label for="Specialists"><img src=icons/class/IconSpecialist.png title="Specialist"></label>
			<input type="checkbox" class="hidden meta" name="Supports" id="Supports" value="Support" checked>
				<label for="Supports"><img src=icons/class/IconSupport.png title="Support"></label>
			<input type="checkbox" class="hidden meta" name="Warriors" id="Warriors" value="Warrior" checked>
				<label for="Warriors"><img src=icons/class/IconWarrior.png title="Warrior"></label>
		</div>
		<div class="columnUniverse">
			<input type="checkbox" class="hidden meta" name="Warcraft" id="Warcraft" value="Warcraft" checked>
				<label for="Warcraft"><img src=icons/franchise/IconWarcraft.png title="Warcraft"></label>
			<input type="checkbox" class="hidden meta" name="Starcraft" id="Starcraft" value="Starcraft" checked>
				<label for="Starcraft"><img src=icons/franchise/IconStarcraft.png title="Starcraft"></label>
			<input type="checkbox" class="hidden meta" name="Diablo" id="Diablo" value="Diablo" checked>
				<label for="Diablo"><img src=icons/franchise/IconDiablo.png title="Diablo"></label>
			<input type="checkbox" class="hidden meta" name="Classic" id="Classic" value="Classic" checked>
				<label for="Classic"><img src=icons/franchise/IconClassics.png title="Classic"></label>
			<input type="checkbox" class="hidden meta" name="Overwatch" id="Overwatch" value="Overwatch" checked>
				<label for="Overwatch"><img src=icons/franchise/IconOverwatch.png title="Overwatch"></label>
		</div>
	</div>
	<div class="heroColumn"><form method="POST" >
		<?php
			$sql=("SELECT * FROM Heroes ORDER BY Name ASC");
			$result = mysqli_query($conn,$sql) or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $sql"); 
			while($row = mysqli_fetch_array($result)) {
			echo "<div class=\"heroClass\">
					<input style=\"display:none\" type=\"checkbox\" id=\"hero[" . $row['Id'] . "]\" 
						name=\"hero[" . $row['Id'] . "]\" class=\"" . $row['Specialization'] . " " . $row['Universe'] ."\" 
							value=\"" . $row['Id'] . "\" checked=\"checked\" >" . 
								"<label for=\"hero[" . $row['Id'] . "]\">
									<img class=\"heroIcon\" src=icons/" . $row['Icon'] . " title=\"" . $row['Name'] . "\" />
									<img class=\"crossIcon\" src=icons/red_cross.png title=\"" . $row['Name'] . "\" />
								</label></div>"; }
		?>
		</form>
	</div>
</div>
</body>
</html>
