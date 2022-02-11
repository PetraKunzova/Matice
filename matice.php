<!DOCTYPE html>

<html lang="cs-cz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="styl.css" rel="stylesheet">
        <title>Min Max</title>
    </head>
    <body>
        <?php
        $s = $_POST['sloupec'];  //@param int $s sloupec
        $r = $_POST['radek'];   //@param int $r  řádek
        $matice = [[]];         //@param pole
        $maxElement = PHP_INT_MIN;
        $minElement = PHP_INT_MAX;
        //Vytvoříme tabulku
        echo('<table border="1">'); 
        for ($i = 0; $i < $r; $i++) {
            echo('<tr>');
            for ($j = 0; $j < $s; $j++) {
             if  ($matice[$i][$j] = rand(-100, 100));
                echo('<td>' . $matice[$i][$j] . '</td>');
                if ($matice[$i][$j] < $minElement) {
                    /** @var type $minElement */
                    $minElement = $matice[$i][$j];
                }
                if ($matice[$i][$j] > $maxElement) {
                    /** @var type $maxElement */
                    $maxElement = $matice[$i][$j];
                }
            }
            echo('</tr>');
        }
        echo('</table>');

        echo("Maximus v poli je " . $maxElement . " a minimus je " . $minElement . " .<br />");
        echo('<br />');
        ?>

    </body>
</html>
