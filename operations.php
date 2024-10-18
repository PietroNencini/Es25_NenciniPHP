<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 25</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        if(empty($num1) or empty($num2) ) {
            echo "<p class='error_par'> ERRORE: Non puoi inserire numeri vuoti </p>";
            echo "<a href='index.html'>Torna alla pagina iniziale (e possibilmente inserisci numeri validi) </a>";          
        }
        else {
            $num1 = intval($num1);
            $num2 = intval($num2);

            $sum = $num1 + $num2;
            $diff = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = $num2 == 0 ? null : ($num1 / $num2);


        }
    ?>

    <table id="result_table">
        <tr>
            <th>Operazione</th>
            <th>Risultato</th>
        </tr>
        <tr>
            <td>Somma</td>
            <td><?php echo $sum?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $diff?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $product?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $quotient == null ? "<p class='error_par'> IMPOSSIBILE </p>" : $quotient ?></td>
        </tr>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>