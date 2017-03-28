<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<div id="Menu">
	<ul>
		<li><a class="menu" href="Index.php">Home</a></li>
		<li><a class="menu" href="Onkunde.php">Onkunde</a></li>
	</ul>
	<div id="Main" >
	<h2>Er heerst paniek...</h2><br>
	<p>Er heerst paniek in het koninkrijk <?php echo $_POST["remark3"]; ?>. Koning 
	<?php echo $_POST["remark6"]; ?> is ten einde raad en als koning <?php echo $_POST["remark6"]; ?>
	 ten einde raad is, dan roept hij zijn ten-einde-raadsheer 
	<?php echo $_POST["remark2"]; ?>.<br><br>

	"<?php echo $_POST["remark2"]; ?>! Het is een ramp! Het is een schande!"<br><br>  "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
	"Mijn <?php echo $_POST["remark1"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net  <?php echo $_POST["remark5"]; ?> voor hem gekocht!"<br><br>
	"Majesteit, uw <?php echo $_POST["remark1"]; ?> komt vast vanzelf weer terug?"<br><br>
	"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["remark8"]; ?> leren?"<br><br>
	"Maar Sire, daar kunt u toch uw <?php echo $_POST["remark7"]; ?> voor gebruiken."<br><br>
	"<?php echo $_POST["remark2"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
	"<?php echo $_POST["remark4"]; ?>, Sire."</p>
</div>
<div class="copyright">
<p> Made By : Jordy Lock</p>
	
</div>

</p>
</body>
</html>