<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP SAYFASINA HOŞGELDİNİZ!</h3>
    <h4>ADINIZ:
    <?php
    if(isset($_POST["kullanıcıadı"]) && $_POST["kullanıcıadı"] )
    {
        echo $_POST["kullanıcıadı"];
    }else{
        echo "Ad Girilmedi!";
    }
    
    ?></h4>
    <h4>E-POSTANIZ:
    <?php
    if(isset($_POST["e-mail"]) && $_POST["e-mail"])
    {
        echo $_POST["e-mail"];
    }else{
        echo "E-Posta Girilmedi!";
    }
    ?></h4>

</body>
</html>