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
        <form action="filopplastning.php" method="post" enctype="multipart/form-data">
          Last opp en tekst fil(1):
            <input type="file" name="fil1" id="fil1">
            Skal duplikater fjernes?
            <select name="dup1" id="dup1">
              <option value="0">Nei</option>
              <option value="1">Ja</option>
            </select><br>
          Last opp en tekst fil(2):
            <input type="file" name="fil2" id="fil2">
            Skal duplikater fjernes?
            <select name="dup2" id="dup2">
              <option value="0">Nei</option>
              <option value="1">Ja</option>
            </select>
            <input type="submit" value="last opp filer" name="submit">
        </form>
    </body>
</html>
