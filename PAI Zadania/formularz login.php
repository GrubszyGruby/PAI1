<html>
<body>
    <form action="./formularz login.php" method="POST">

<div>
		 	<label id="label" for="login">Podaj login:</label><br>
		  	<input class="input" type="text" id="login" name="login" placeholder="login"><br>
		</div>
<div>
		 	<label id="label" for="hasło">Podaj hasło:</label><br>
		  	<input class="input" type="text" id="hasło" name="hasło" placeholder="hasło"><br>
		</div>
<div>	
			<p> Zapamiętać? <p>
			<input type="radio" id="checkbox" name="checkbox" value="Zapamiętaj mnie">
			<label for="checkbox">zapamiętaj mnie</label><br>
			<input type="radio" id="checkbox" name="checkbox" value=" ">
			<label for="checkbox">Nie zapamiętuj</label><br>
			<input type="submit" />

			
		</div>

<?php
if(isset($_POST['login'])){
echo $_POST ['login']."<br>";}

if(isset($_POST['checkbox'])){
    if($_POST['checkbox'] == 'Zapamiętaj mnie') echo "Zapamiętano";
    else echo "Nie zapamiętano";
}


?>


	
</body>
</html>