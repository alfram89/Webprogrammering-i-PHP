<?php
echo " <h1>Analyse av favorittfilm</h1>"; 
    echo "Din favorittfilm er: " . $_GET['filmnavn']; //En setning om hva din favorittfilm er
    $lengde = strlen($_GET['begrunnelse']);  //setter lengden på begrunnelsen inn i en variabel
echo "<br>";
    if ($lengde<10) echo "<br>Begrunnelsen er for kort"; //Kontrollerer om begrunnelsen er lang nok for at den er grei.
    else echo "<br>Begrunnelsen er ok";
?>