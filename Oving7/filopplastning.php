<?php

if (isset($_POST["submit"])) {
  $innh1 = "";
  $innh2 = "";

  if ($file1 = fopen($_FILES["fil1"]["tmp_name"], "r")) {
    while (!feof($file1)) {
      $linje = fgets($file1);
      $innh1[] = $linje;
      }
      fclose($file1);
    }
    if ($file2 = fopen($_FILES["fil2"]["tmp_name"], "r")) {
      while (!feof($file2)) {
        $linje = fgets($file2);
        $innh2[] = $linje;
        }
        fclose($file2);
      }
    if ($_POST["dup1"] = "1") {
        $innh1 = array_unique($innh1);
      }
    if ($_POST["dup2"] = "1") {
        $innh2 = array_unique($innh2);
      }
    }
      echo "Oppgave3a<br>";
      print_r($innh1);
      print_r($innh2);

      echo "<br><br>Oppgave3b<br>";
      $snittet = array_intersect($innh1, $innh2);
      print_r($snittet);

      echo "<br><br>Oppgave3c<br>";
      $minus = array_diff($innh1, $innh2);
      print_r($minus);

      echo "<br><br>Oppgave3d<br>";
      $sum = array_merge($innh1, $innh2);
      print_r($sum);

      echo "<br><br>Oppgave3e<br>";
      $minus1 = array_diff($innh1, $innh2);
      $minus2 = array_diff($innh2, $innh1);
      $notsnitt = array_merge($minus1, $minus2);
      print_r($notsnitt);

?>
