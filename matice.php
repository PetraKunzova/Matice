<!DOCTYPE html>

<html lang="cs-cz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="styl.css" rel="stylesheet">
        <title>Min Max</title>
    </head>
    <body>
        <?php
        $s = $_POST['sloupec']; /* Počet sloupců zadané uživatelem */
        $r = $_POST['radek'];   /* Počet řádků zadané uživatelem */
        $matice = [array(), /* Parametry pole */
            array(),
            array()
        ];
        
        echo('<table border="1">');
        for ($j = 0; $j < $r; $j++) {
            echo('<tr>');
            for ($i = 0; $i < $s; $i++) {
                echo('<td>' . $matice[$j][$i] = rand(-100, 100) . '</td>');
            }
            echo('</tr>');
        }
        echo('</table>');
        echo("<p>Pole je složené ze " . $r . " řádků a " . $s . " sloupců.</p>");
        echo('<br />');
        ?>

    </body>
</html>
