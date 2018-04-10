<?php
Include "topp.inc.php";
?>
<form>
    <fieldset>
        <legend>Bestillingssjema</legend>
            Fullt navn:<br>
            <input type="text" name="navn"><br>
            Leveringsadresse:<br>
            <input type="text" name="adresse"><br>
            <br>
            Antall:<br>
            <input type="radio" name="antall" value="10pakning" checked>10 pakning<br>
            <input type="radio" name="antall" value="1pakning">1 stk<br>
            <br>
            Ekstratjenester:<br>
            <input type="checkbox" name="ekstra[]" value="forsikring" checked>Forsikring<br>
            <input type="checkbox" name="ekstra[]" value="beskyttelse">Beskyttelse<br>
            <input type="checkbox" name="ekstra[]" value="service">Utvidet service<br>
            <br>
            Leveringstidspunkt:<br>
            <?php $ukedag = array ('Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag','Søndag');?>       <!--Lager en matrise med ukedagene.-->
            <select name="ukesdag">
                <?php foreach ($ukedag as $ukenr) {echo "\t<option value='$ukenr'>$ukenr</option>\n";}?>  <!--Printer ut verdiene i matrisen inn i option.-->
            </select>
            <select name="tidspunkt">
                <?php for ($i=1; $i<24; $i++) {     //Setter opp en "for" løkke for å printe inn klokkeslett.
                echo "\t<option value='";
                if ($i<10) $nuller = "0";           //Tester om det skal være en null først i klokkeslettet.
                else $nuller = "";
                $tid = $nuller . $i . ":00";
                echo "$tid'>$tid</option>\n";       //Verdiene som skal inn i option
                echo "\t<option value='";           //Skriver inn hver halvtime i samme option.
                $tid = $nuller . $i . ":30";
                echo "$tid'>$tid</option>\n";}?>
                </select><br>
            <br>
            <input type="submit" name="bestilling" value="Bestill">
    </fieldset>
</form>
<div style="position:absolute; bottom:10px"><?php   //Legger inn kontaktinformasjonen på denne siden
Kontaktinformasjon();
?></div>
<?php
Include "bunn.inc.php"
?>
