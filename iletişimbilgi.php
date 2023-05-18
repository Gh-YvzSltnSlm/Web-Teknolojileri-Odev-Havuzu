<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["ad"];
            $lastname= $_POST["soyad"];
            $email = $_POST["email"];
            $date = $_POST["date"];
            $dersler = $_POST["dersler"];
            $öğrenimd = $_POST["öğrenimd"];
            $bölümm = $_POST["bölümm"];
            $mesaj = $_POST["mesaj"];


            echo "<p><strong>Ad:</strong> " . $name . "</p>";
            echo "<p><strong>Soy Ad:</strong> " . $lastname . "</p>";
            echo "<p><strong>E-posta:</strong> " . $email . "</p>";
            echo "<p><strong>Doğum Tarihiniz:</strong> " . $date . "</p>";
            echo "<p><strong>Öğrenim Durumunuz:</strong> " . $öğrenimd . "</p>";

            echo "<p><strong>FAVORİ DERSLER:</strong></p>";
            echo "<ul>";
            foreach ($dersler as $ders) {
                echo "<li>" . $ders . "</li>";
            }
            echo "</ul>";

            echo "<p><strong>Bölümünüz:</strong> " . $bölümm . "</p>";
            echo "<p><strong>MESAJINIZ:</strong> " . $mesaj . "</p>";
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>İLETİŞİM BİLGİLERİ</title>
    </head>
    <body>
        <form action="iletişim.html">

     <input type="submit" name="back" value="İLTEİŞİM SAYFASINA DÖN.." >
    </form>
    </body>
    </html>