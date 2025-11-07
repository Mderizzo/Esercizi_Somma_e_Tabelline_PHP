<?php
//ESERCIZIO CALCOLO DELLA SOMMA
/* // definisco array di numeri
$numeri = [1, 2, 3, 4, 5];

// definisco e dichiaro il contenitore somma vuoto
$somma = 0;

// ciclo l'array di numeri e per ogni iterazione aggiungo il valore a somma
foreach ($numeri as $num) {
    $somma += $num;
}

// stampo il risultato
echo "La somma è: $somma"; */

?>
<!-- ESERCIZIO CALCOLO TABELLINA -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Tabellina</title>
</head>

<body>
    <form method="post">
        <input type="number" name="numero" placeholder="Inserisci un numero" required>
        <button type="submit">Mostra</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        for ($i = 0; $i <= 10; $i++) {

            echo ($numero * $i . "<br>");
        }
    }
    ?>
</body>

</html>