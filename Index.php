<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="Menu">
	<ul>
		<li><a class="menu" href="Index.php">Home</a></li>
		<li><a class="menu" href="">Onkunde</a></li>
	</ul>
	<form action="process.php" method="POST">
		<ul>
			<li><input class="submit" type="submit" name="submit" value="Verzend">Verzend</input></li>

		</ul>

</div>
	
		<div id="Main">
		<p>Welk dier zou je nooit als huisdier willen hebben?  <input class="text" type="text" name="remark" value="<?php if(isset($_POST[])) echo $_POST[];  ?>"></p><br>
		<p>Wie is de belangrijkste persoon in je leven?  <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

		<p>In welk land zou je graag willen wonen?  <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

		<p>Wat doe je als je je verveelt?  <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

		<p>Met welk speelgoed speelde je als kind het meest? <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

		<p>Bij welke docent spijbel je het liefst?  <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

		<p>Als je €100.000,- had, wat zou je dan kopen? <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

		<p>Wat is je favoriete bezigheid? <input class="text" type="text" value="<?php if(isset($_POST[])) echo $_POST[];  ?>" name="remark"></p><br>

</div>


		<!-- Er heerst paniek in het koninkrijk ___. Koning ___ is ten einde raad en als koning ___ ten einde raad is, dan roept hij zijn ten-einde-raadsheer ___.

		"___! Het is een ramp! Het is een schande!"  "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
		"Mijn ___ is verdwenen! Zo maar, zonder waarschuwing. En ik had net  ___ voor hem gekocht!"
		"Majesteit, uw ___ komt vast vanzelf weer terug?"
		"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd ___ leren?"
		"Maar Sire, daar kunt u toch uw ___ voor gebruiken."
		"___, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
		"___, Sire." -->

	


		


	</form>
</body>
</html>