<h1>Övning 1</h1>
<h2>Skriv en php-funktion som skriver ut en tabell <br>
med uträkning av x^2 för varje tal mellan 1 och 100
</h2>
<?php
 // skapar en funktion som genererar en hel tabell.
function tabell() 
{
    echo "<table border=1>"; // börjar med att generera tabell med kanter

    echo "<tr><th>Tal x</th><th>x&sup2;</th></tr>"; // tabellhuvud med rubriker
    
    for ($a = 1; $a <= 100; $a++) { // för varje varv 1-100...
        echo "<tr><td>$a</td><td>". pow($a,2)."</td></tr>"; // visa cell med talet coh cell med talet^2
    }                           // och öka talet med +1.
    echo "</table>";            // avsluta tabellen.
}

// anropa funktionen så den körs.
// behövs ingen separat echo, eftersom det görs för varje iteration.
tabell();

?>
