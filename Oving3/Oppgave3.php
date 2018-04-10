<?php
    echo "<h1>Ordrebekreftelse fra Pizza4You</h1>";
        echo "Navn: " . $_GET['navn'] . "<br>";           //henter navn
        echo "Adresse: " . $_GET['adresse'] . "<br><br>"; //henter adresse
        echo "Du har bestilt en " . $_GET['storrelse'] . " pizza.<br>"; //henter størrelsen
        echo "Med de valgte ingrediensen(e): "; 
            $fyll = $_GET['ingredienser'];      //lager en matrise med alle ingredienesene.
            foreach ($fyll as $ingrediens){     //En løkke for å printe eller kontrollere verdiene i matrisen
                switch ($ingrediens){           //Brukes for å kontrollere hva skalgs ingrediens så det kan assosieres med et bilde.
                    case "lok":
                        echo $ingrediens . ":<img src='onion.png'>. ";
                        break;
                    case "sopp":
                        echo $ingrediens . ":<img src='mushroom.png'>. ";
                        break;
                    case "gulrot":
                        echo $ingrediens . ":<img src='carrot.png'>. ";
                        break;
                    case "skinke":
                        echo $ingrediens . ":<img src='ham.png'>. ";
                        break;
                };
                //echo $ingredienser . ", "; //Alternativ. hvis man fjerner switch. Printer ut navnene på ingrediensene. 
            };
        echo "<br>Leveringstidspunktet er klokken: " . $_GET['tidspunkt'] . " på førstkommende " . $_GET['ukesdag'] . ".";      //Setning som forteller om valgt leveringstidspunkt.

?>
