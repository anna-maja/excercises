<?php
/*
Skapa ett skript som hämtar ett tal via URLen
Om ett tal saknas i URLen så ska skriptet visa meddelandet
”Talet saknas”.
Om talet större än 100 visa talet och direkt efter meddelandet
” är större än 100”.
Om talet mindre än eller lika med 100 visa talet och direkt efter
meddelandet ” är mindre än 100”
 */
?>

<h2>Hämta data via URL</h2>
<p>
Skapa ett skript som hämtar ett tal via URLen. <br>
Om ett tal saknas i URLen: <br>
skriptet ska visa meddelandet ”Talet saknas”. <br>
Om talet större än 100: <br>
visa talet och direkt efter meddelandet ” är större än 100”. <br>
Om talet mindre än eller lika med 100: <br>
visa talet och direkt efter meddelandet ” är mindre än 100” 
</p>
<p>
1. test med ?number=3  <br>
2. test med ?number=100 <br>
3. test med ?number=101 <br>
</p>

<?php 

//skicka number om det finns data att hämta från UR, annars skicka meddelande.
// echo $_GET['number'] ?? 'Talet saknas.';
// echo "<br>";

// villkor för >100 coh för <= 100, visa talet och skriv ut olika meddelande. 
/* if (number >100) {
    $message = " är större än 100.";
}
else {
    $message = " är 100 eller lägre.";
}
echo $_GET['number'];
echo 
 */

/*if (isset($_GET['number'])  > 100) {
    echo $_GET['number'];
    echo " är större än 100.";
}
else {
    echo $_GET['number'];
    echo " är mindre än, eller lika med, 100.";
}
 */

if (isset($_GET['number'])) {
    if ($_GET['number'] > 100) {
       echo $_GET['number'] . " är större än 100.";
    }
    else if ($_GET['number'] <= 100) {
      echo $_GET['number'] . " är mindre än, eller lika med, 100.";
    } 
}
else {
    echo "Inget tal är skrivet.";
}


   
// skriv ut allt i arrayen

print "<pre>";
print_r($_GET);
print "</pre>";

?>