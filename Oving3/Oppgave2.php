<!DOCTYPE HTML>
<html>    
    <head>
        <title>Startsiden; <?php echo date("d.m.Y");?></title>
        <meta charset="UTF-8">
        <meta name="description" content="Startside for faget Webprogrammering i PHP">
        <meta name="keywords" content="PHP, Tutorials, Øving, Webprogrammering, NTNU">
        <meta http-equiv="refresh" content="60">
    </head>
    <body>
        <!--Enken form for å sende inn informasjon om navn og interesse.-->
        <form action="Retur2.php" method="get">
            Hva heter du?<br>
            <input type="text" name="navn"><br>
            <br>
            Hva er din interesse?<br>
            <select name="interesse">
                <option value="Sport">Sport</option>
                <option value="Mat">Mat</option>
                <option value="Kultur">Kultur</option>
                <option value="Friluft">Friluftsliv</option>
                <option value="Programmering">Programmering</option>
                <option value="Boklesning">Boklesning</option>
            </select>
            <input type="submit">
        </form>
    </body>
</html>