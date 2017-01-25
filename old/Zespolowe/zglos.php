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
		<div class='grupuj' id='ud'>
			<p>Dodaj swoje zgłoszenie</p>
			<div class='logowanie'>
			{{FORM}}
			</div>
		</div>

EOT;

$FORM1 = <<<EOT

EOT;
$FORM2 = <<<EOT
				<form method="POST" action="zglos.php" id="usrform" enctype="multipart/form-data">
					<input type="file" accept="image/*|video/*" capture="camera" name="zdjecie">
					<p><b>Komentarz:</b></p><input type="text" name="comment">
					<input type="hidden" value="{{IDEVENT}} "name="eventid">
					<input class='button'  type="submit" value="Dodaj" name="dodaj">
				</form>
EOT;
$FOOTER = <<<EOT
		</div>
</body>
</html>
EOT;

if(isset($_POST['dodaj'])){
	require_once("sql/baza.php");
	$image = $_FILES['zdjecie'];
    $imagename = $_FILES['zdjecie']['name'];
    $imagetype = $_FILES['zdjecie']['type'];
    $imageerror = $_FILES['zdjecie']['error'];
    $imagetemp = $_FILES['zdjecie']['tmp_name'];
    $imagePath = "uploads/".$_SESSION['login']."/";
	echo $imageerror;
	if($imageerror == 0){
		if(!file_exists ( "uploads/".$_SESSION['login'] )){
			mkdir("uploads/".$_SESSION['login']);
		}
		$temp = substr($imagename, 0, strlen($imagetype)+1);
		while(file_exists($imagePath."/".$imagename)){
			 $imagename = "0".$imagename;
		}
		if(is_uploaded_file($imagetemp)) {
			if(!move_uploaded_file($imagetemp, $imagePath . $imagename)) {
				echo "Failed to move your image.";
			}
		}
		else {
			echo "Failed to upload your image.";
		}
		
		$B = new Baza();

		$x = $B->dodajZgloszenie($_SESSION['id'], $_POST['eventid'], $_POST['comment'], date('Y-m-d H:i:s'),$imagePath.$imagename);
		
		header("Location: twojprofil.php");
	}else{
		echo "Brak zdjecia";
	}
	
}
$FORM2 = (string) str_replace("{{IDEVENT}}", (string) $_POST['eventid'],  $FORM2);

echo (string) str_replace("{{FORM}}", (string) $FORM2,  $HEADER);

echo $paneldolny;



echo $FOOTER;
?>	