<?php
function daynight(){ // Funksjon som tester om timetallet er mellom et tidsrom
  $time = date("H"); // og tester om ukedagstallet er søndag(7) eller ikke.
  $dag = date("N");
  if ($dag != 7){
    if ($time >= 06 && $time < 12) {
      echo "<p> God morgen </p>";}
    elseif ($time >= 12 && $time < 18) {
      echo "<p> God ettermiddag </p>";}
    elseif ($time >= 18 && $time < 24) {
      echo "<p> God kveld </p>";}
    else {
    "<p> God natt </p>";}
  }
  else {
    if ($time >= 06 && $time < 12) {
      echo "<p style='color:green'> God morgen </p>";}
    elseif ($time >= 12 && $time < 18) {
      echo "<p style='color:green'> God ettermiddag </p>";}
    elseif ($time >= 18 && $time < 24) {
      echo "<p style='color:green'> God kveld </p>";}
    else {
    "<p style='color:green'> God natt </p>";}
  }
};

function tilfeldig(){ // enkel funksjon som skal gjengi et tilfeldig tall mellom ti muligheter (0-9).
  $tall = date("U") % 10; // funksjonen er ikke helt tilfeldig men vil fremstå slik for folk som ikke oppdaterer siden veldig raskt etter hverandre.
  switch ($tall) { // fordi den er basert på sekunder. 
    case '0':
      echo "bilde 1";
      break;
    case '1':
      echo "bilde 2";
      break;
    case '2':
        echo "bilde 3";
        break;
    case '3':
        echo "bilde 4";
        break;
    case '4':
        echo "bilde 5";
        break;
    case '5':
        echo "bilde 6";
        break;
    case '6':
        echo "bilde 7";
        break;
    case '7':
        echo "bilde 8";
        break;
    case '8':
        echo "bilde 9";
        break;
    case '9':
        echo "bilde 10";
        break;
    default:
      echo "En feil har skjedd";
      break;
  };
};
?>
