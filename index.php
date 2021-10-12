<!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php 

    include __DIR__ . '/databasa.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    <div class="wrapper">

        <header>
            <img src="./img/spotify-icon.png" alt="spotify">
            <select name="" id="">
                <option value="">Tutti i generi</option>
            </select>
        </header>

        <main>
            <div class="container">

                <?php 
                    foreach ($db as $disco) {
                        echo "<div class='album'>";
                            echo "<img src='$disco[poster]' alt='$disco[title]'>";
                            echo "<h3>$disco[title]</h3>";
                            echo "<div class='disco-info'>";
                                echo "<p>$disco[author]</p>";
                                echo "<p>$disco[year]</p>";
                             echo "</div>";
                        echo "</div>";
                    }
                ?>

            </div>
        </main>
    </div>
</body>
</html>


