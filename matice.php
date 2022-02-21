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
        $imin = $imax = -1;
        $jmin = $jmax = -1;
        
        //cyklus pro vytvoření pole 
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $s; $j++) {
                $matice[$i][$j] = rand(-100, 100);
                if ($matice[$i][$j] < $minElement) {
                    /** @var type $minElement */
                    $minElement = $matice[$i][$j];
                    $imin = $i;
                    $jmin = $j;
                }
                if ($matice[$i][$j] > $maxElement) {
                    /** @var type $maxElement */
                    $maxElement = $matice[$i][$j];
                    $imax = $i;
                    $jmax = $j;
                }
            }
        }

        echo('<table border="2">');
        for ($i = 0; $i < $r; $i++) {
            echo('<tr>');
            for ($j = 0; $j < $s; $j++) {
                if (($i == $imin) && ($j == $jmin)) {
                    if (($imin == $imax) && ($jmin == $jmax)) {
                        echo('<td style="color:#FFA500">' . $matice[$i][$j] . '</td>');
                    } else
                        echo('<td style="color:#ff0000">' . $matice[$i][$j] . '</td>');
                } elseif (($i == $imax) && ($j == $jmax)) {
                    echo('<td style="color:#006400">' . $matice[$i][$j] . '</td>');
                } else
                    echo('<td>' . $matice[$i][$j] . '</td>');
            }
            echo('</tr>');
        }
        echo('</table>');

        echo("<p>Maximus v poli je " . $maxElement . " a minimus je " . $minElement . " .<br /></p>");
        echo('<br />');
        ?>

    </body>
</html>
