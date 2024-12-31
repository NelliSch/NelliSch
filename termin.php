<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Sende die Daten per E-Mail (oder speichere sie in einer Datenbank)
    $to = "vivien.schrull1@gmail.com";
    $subject = "Neuer Termin gebucht";
    $message = "Name: $name\nE-Mail: $email\nDatum: $date\nUhrzeit: $time";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Termin wurde erfolgreich gebucht!";
    } else {
        echo "Fehler beim Buchen des Termins.";
    }
}
?>