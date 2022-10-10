<!DOCTYPE html>


    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form  method="POST">
	<label>Podaj wiek:</label><br> 
       <input type="number" name="wiek" />
        <input type="submit" />
	
    </form>
<?php

function wiek($liczba) {
	if ($liczba <0){
		echo "?";
	}
	else if ($liczba <=18){
		echo "młody";
	}
	else if ($liczba <=39){
		echo "dorosły";
	}
	else{
		echo "stary";
	}
}

if (isset($_POST['wiek'])){
	
	$wyswietl = (int)$_POST['wiek'];
	wiek($wyswietl);
}
?>
</body>
</html>