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
        <!-- Enkel form for hvilken favorittfilm du har og hvorfor -->
        <form action="Retur1.php" method="get">
            Hva er din favorittfilm?<br>
            <input type="text" name="filmnavn"><br>
            <br>
            Begrunnelsen:<br>
            <textarea name="begrunnelse" rows="7" cols="50">Skriv her...</textarea><br>
            <input type="submit">
        </form>
    </body>
</html>