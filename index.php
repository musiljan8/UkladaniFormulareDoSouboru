<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ukladani formulare do souboru</title>
        <link rel="stylesheet" type="text/css" href="styly/styly.css"
    </head>
    <body>
        <h1>Vypln formular</h1>
       
        <form action="odeslat.php" method="get">
            Jmeno:
<input type="text" name="jmeno" size="15">
            Prijmeni:
<input type="text" name="prijmeni" size="20">
            Vek:
<input type="text" name="vek" size="5">

<input type="submit" value="odeslat">
<?php


 ?>        
        </form>       
</html>