<?php
 header('Refresh: 4; URL=https://crossmed.com.pl/');
$do = 'office@crossmed.com.pl'; //tutaj  swój adres e-mail
$email = $_POST['email']; //pobieranie danych o e-mailu nadawcy
$wiadomosc = $_POST['wiadomosc']; //pobieranie wiadomości
$temat = "Wiadomosc ze strony Crossmed"; //pobieranie tematu
//w $header tworzymy nagłówek e-mail (dane o kodowaniu, gdzie ma być e-mail wysłany itp.
$header = "From: $email \nContent-Type:".
            ' text/plain;charset="UTF-8"'.
            "\nContent-Transfer-Encoding: 8bit";

if (mail($do, $temat, $wiadomosc, $header))
        {
        echo ('E-mail został wysłany! Dziękujemy!'); //jeżeli e-mail się wyśle, pokazywanie tego komunikatu
        }
    else
    {
        echo ('Bład podczas wysyłania e-maila!');
        }
       
 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-size: 4vw;
        }

        @media (min-width:1300px) {
            body {
                font-size: 3vw;
            }
        }

    </style>

</head>

<body style="font-family: 'Lato', sans-serif; position:absolute; left:50%; top:45%;transform: translateX(-50%);text-align: center">

</body>

</html>
