<?php
function vertikalmeny(){                      //Funksjon for å lage menyen og innloggingsfeltet.
  echo "<a href='index.php'>Startsiden</a>
        <a href='om.php'>Om oss</a>
        <a href='bestill.php'>Bestill</a>
        <a href='kontakt.php'>Kontakt oss</a>
        <form action='passordsjekk.php' method='post' style='display:inline; position:absolute; right:30px'>
        Brukernavn:<input type='text' name='brunernavn'>
        Passord:<input type='password' name='passord'>
        <input type='submit' value='Logg Inn'>
        </form>";
}

function Kontaktinformasjon(){                //Funksjon for å skrive ut kontaktinformasjonen
  echo "<p>Adresse: Fjordgaten 12 7048 Trondheim<br>
          Telefonnummer: 406 78 432<br>
          Email: kontakt@firma.no</p>";
}

?>
