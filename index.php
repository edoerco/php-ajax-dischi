<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- importo cdn Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- importo cdn axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>
    <div id="root" class="wrapper">
        <header>
            <img src="./img/spotify-icon.png" alt="spotify">
            <select name="" id="">
                <option value="">Tutti i generi</option>
            </select>
        </header>

        <main>
            <div class="container">
                <div class="album" v-for="(disc, index) in discs" :key="index">
                    <img :src="disc.poster" :alt="disc.title">
                    <h3>{{disc.title}}</h3>
                    <div class="disco-info">
                        <p>{{disc.author}}</p>
                        <p>{{disc.year}}</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- collego il js -->
    <script src="js/main.js"></script>
</body>
</html>

<!-- <?php 
    // foreach ($db as $disco) {
    //     echo "<div class='album'>";
    //         echo "<img src='$disco[poster]' alt='$disco[title]'>";
    //         echo "<h3>$disco[title]</h3>";
    //         echo "<div class='disco-info'>";
    //             echo "<p>$disco[author]</p>";
    //             echo "<p>$disco[year]</p>";
    //             echo "</div>";
    //     echo "</div>";
    // }
?> -->


