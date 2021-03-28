<?php
$rozmiar=$_POST['liczba'];

if($rozmiar>1 && is_numeric($rozmiar)) {
    $wielkosc_tabeli= 30*$rozmiar;
    echo "<table width=\"$wielkosc_tabeli px\" cellspacing=\"0px\" cellpadding=\"0px\" border=\"1px\">";


    for ($wiersz = 1; $wiersz <= $rozmiar; $wiersz++) {
        echo "<tr>";
        for ($kolumna = 1; $kolumna <= $rozmiar; $kolumna++) {
            $numer_pola = $wiersz + $kolumna;
            if ($numer_pola % 2 == 0) {
                echo "<td height=35px width=30px bgcolor='white'></td>";
            } else {
                echo "<td height=35px width=30px bgcolor='black'></td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "Wprowadzono błędne dane, wprowadz liczbe > 1!";
}
