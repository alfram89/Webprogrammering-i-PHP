<!DOCTYPE HTML>
<html>
    <body>
<?php
    $rader = 11; //Definerer størrelsen på gangetabellen minus 1.
    $koll = 11;

    echo "<table style='width:50%' border='1px'>"; // Lager tabellen med ramme
        for ($r =1; $r < $rader; $r++){ //Definerer en teller; Testen; Økning
            echo'<tr>'; //Tegner rader
            for ($k = 1; $k < $koll; $k++) //Definerer en teller; testen; Økning
                echo '<td style="text-align:center">' .$k*$r.'</td>'; //Skriver en datacelle og fyller den med gangestykket (Rad * Kollonne)
           echo '</tr>';
        }
    echo"</table>";?>


    </body>
</html>
