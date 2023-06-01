<?php
$jsonfile = file_get_contents('players.json');
$jsondecoded = json_decode($jsonfile, true);
$players = count($jsondecoded['players']);

// get exact value
// echo $jsondecoded[0]['rating'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <header>
            <a href="" class="navigation-link">Tabelle</a>
            <a href="fdg.php" class="navigation-link">Spieler</a>
        </header>
        <main>
            <h1>Tabelle</h1>
            <table class="players-table">
                <tr>
                    <td>Platz</td>
                    <td>Name</td>
                    <td>Rekord</td>
                    <td>Rating</td>
                </tr>
                <?php foreach($jsondecoded['players'] as  $player) {
                    $firstName = $player['first_name'];
                    $lastName = $player['last_name'];
                    $rating = $player['rating'];
                    $win = $player['win'];
                    $draw = $player['draw'];
                    $loss = $player['loss'];

                    echo "<tr>
                            <td>1.</td>
                            <td><a href=''>$firstName $lastName</a></td>
                            <td>$win-$draw-$loss</td>
                            <td><span class='rating'>$rating</span></td>
                        </tr>";
                } ?>
            </table>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> firecase</p>
        </footer>
    </body>
</html>
