<!DOCTYPE HTML>
<html>    
    <head>
        <title>Pizza4You; <?php echo date("d.m.Y");?></title>
        <meta charset="UTF-8">
        <meta name="keywords" content="PHP, Tutorials, Øving, Webprogrammering, NTNU">
        <meta http-equiv="refresh" content="60">
        <link rel="stylesheet" type="text/css" href="stylesheet2.css">
    </head>
    <body>
        <h1>Bestill pizza fra Pizza4You</h1>
            <form action="../Oving3/Oppgave3.php" method="get">
                <fieldset>
                    <legend>Bestillingssjema</legend>
                        Fullt navn:<br>
                        <input type="text" name="navn"><br>
                        Adresse:<br>
                        <input type="text" name="adresse"><br>
                        <br>
                        Størrelse:<br>
                        <input type="radio" name="storrelse" value="stor" checked>Stor 30cm<br>
                        <input type="radio" name="storrelse" value="liten">Liten 20cm<br>
                        <br>
                        Ingredienser:<br>
                        <input type="checkbox" name="ingredienser[]" value="lok">Løk<br>
                        <input type="checkbox" name="ingredienser[]" value="sopp">Sopp<br>
                        <input type="checkbox" name="ingredienser[]" value="gulrot">Gulrot<br>
                        <input type="checkbox" name="ingredienser[]" value="skinke">Skinke<br>
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
        
    </body>
</html>