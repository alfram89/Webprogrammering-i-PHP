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
      <div style="display:inline;
                  display:block;
                  padding:8px;
                  background-color:#4CAF50;"><?php //legger inn menyen og innloggingsfeltet sammen med headeren på alle sidene.
      Include "funksjoner.inc.php";
      vertikalmeny();
      ?></div>
