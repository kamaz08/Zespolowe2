<?php	
	require_once("sesja.php");
	require_once("helpers/basic.php");
$HEADER = 
<<<EOT
<html>
<head>

	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class='strona'>
	<div class='panelgorny'>
		<div id="points"><img src="img/korona.png"/>{{POINTS}}</div>
		<div style="width: 50%;"><img src="./img/logo.png"/></div>
		<div><a href='./wyloguj.php'><img src="./img/logout.png"/></a></div>
	</div>
	
EOT;

$FOOTER = <<<EOT
		</div>
</body>
</html>
EOT;

$HTAG = <<<EOT
<div class='grupuj' id='gr'>
	<p>Obserwowane #tagi</p>
	{{HTAG}}
	<br>
</div>
EOT;

require_once("sql/baza.php");
$B = new Baza();

$points = $B->getPoints($_SESSION['id']);

echo (string) str_replace("{{POINTS}}", (string) $points,  $HEADER);

echo $paneldolny; 

$B->refreshDatabase();

$result=$B->getEventsUserTagsList($_SESSION['id']);
$ALLYOUR = generateWydarzenia($result);
echo (string) str_replace("{{HTAG}}", (string) $ALLYOUR,  $HTAG);
echo $FOOTER;
?>	