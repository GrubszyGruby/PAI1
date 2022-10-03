<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./formularz-text.php" method="POST">
        <input type="text" name="imie" />
        <input type="submit" />
    </form>
        <?php
           if(isset($_POST['imie'])){
            echo "Cześć " . htmlspecialchars($_POST['imie']) . ". ";
        }else{
            echo "Cześć nieznajomy.";
        }
        ?>
    </body>
</html>