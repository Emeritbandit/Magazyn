<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarządzanie zapasami</title>
</head>
<body>

<h2>Śledzenie poziomu zapasów</h2>
<form action="sprawdz_poziom_zapasow.php" method="post">
    <label for="produkt">Produkt:</label>
    <select id="produkt" name="produkt">
        <!-- Tutaj opcje wyboru produktów -->
        <option value="1">Produkt 1</option>
        <option value="2">Produkt 2</option>
        <option value="3">Produkt 3</option>
    </select>
    <input type="number" name="minimalny_poziom" placeholder="Minimalny poziom">
    <button type="submit">Sprawdź poziom zapasów</button>
</form>

<h2>Zamówienia</h2>
<form action="zloz_zamowienie.php" method="post">
    <label for="produkt_zamowienie">Produkt:</label>
    <select id="produkt_zamowienie" name="produkt_zamowienie">
        <!-- Tutaj opcje wyboru produktów -->
        <option value="1">Produkt 1</option>
        <option value="2">Produkt 2</option>
        <option value="3">Produkt 3</option>
    </select>
    <input type="number" name="ilosc" placeholder="Ilość">
    <button type="submit">Złóż zamówienie</button>
</form>

<h2>Zarządzanie dostawcami</h2>
<form action="dodaj_dostawce.php" method="post">
    <input type="text" name="nazwa_dostawcy" placeholder="Nazwa dostawcy">
    <input type="text" name="adres_dostawcy" placeholder="Adres dostawcy">
    <input type="text" name="kontakt_dostawcy" placeholder="Kontakt dostawcy">
    <button type="submit">Dodaj dostawcę</button>
</form>

<h2>Skanowanie kodów kreskowych</h2>
<form action="zeskanuj_kod_kreskowy.php" method="post">
    <input type="text" name="kod_kreskowy" placeholder="Kod kreskowy">
    <button type="submit">Zeskanuj kod kreskowy</button>
</form>

<h2>Raportowanie</h2>
<form action="generuj_raport.php" method="post">
    <select name="typ_raportu">
        <option value="produkty">Raport o produktach</option>
        <option value="zamowienia">Raport o zamówieniach</option>
        <option value="dostawcy">Raport o dostawcach</option>
    </select>
    <button type="submit">Generuj raport</button>
</form>

</body>
</html>



<?php
function sprawdzPoziomZapasow($produkt, $minimalnyPoziom) {
    // Tutaj umieść kod sprawdzający poziom zapasów danego produktu
    $poziomZapasow = $produkt['ilosc'];
    if ($poziomZapasow < $minimalnyPoziom) {
        wyslijAlertEmail("Zbyt niski poziom zapasów dla produktu: " . $produkt['nazwa']);
    }
}

function wyslijAlertEmail($tresc) {
    // Tutaj umieść kod wysyłający alert email
    echo "Wysłano alert: $tresc";
}
?>










