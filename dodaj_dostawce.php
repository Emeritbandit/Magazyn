<?php
function dodajDostawce($nazwa, $adres, $kontakt) {
    // Tutaj umieść kod dodawania dostawcy do bazy danych
    echo "Dodano nowego dostawcę: $nazwa";
}

function usunDostawce($id) {
    // Tutaj umieść kod usuwania dostawcy z bazy danych
    echo "Usunięto dostawcę o ID: $id";
}

function edytujDostawce($id, $nazwa, $adres, $kontakt) {
    // Tutaj umieść kod edycji danych dostawcy w bazie danych
    echo "Zaktualizowano dane dostawcy o ID: $id";
}
?>