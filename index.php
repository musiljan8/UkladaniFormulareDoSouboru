<?php 
    if(isset($_GET["jmeno"]) && isset($_GET["prijmeni"])) {
        $jmeno = $_GET["jmeno"];
        $prijmeni = $_GET["prijmeni"];
        
        echo $_GET["jmeno"] . ",";
        echo $_GET["prijmeni"] . "!";

     
         $soubor = fopen("data.txt", "a+");
         fwrite($soubor, $jmeno . $prijmeni ."\n" );    
         fclose($soubor);
    }
 
    function zobrazText($text) {
        echo  $text; 
    }
    
    function jePrazdne($jmeno) {
        return empty($jmeno) || strlen($jmeno) < 2;
    }
 
 ?> 

    <!DOCTYPE html>
    <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ukladani formulare do souboru</title>
        <link rel="stylesheet" type="text/css" href="styly/styly.css"
        </head>
        <body>
        <h1>Vypln formular</h1>
        

       
        <form method="get">
            Jmeno:
        <input type="text" name="jmeno" size="15">
            Prijmeni:
        <input type="text" name="prijmeni" size="20">

        <input type="submit" value="odeslat">
        </form>
    
        <h2>Tady vypisu co je v souboru data.txt</h2>

<?php 
// Vypis obsah souboru data.txt
        
        




?>
    
    
    </body>
</html>
        
  
 