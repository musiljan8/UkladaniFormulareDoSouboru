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

       <? echo $_GET["jmeno"];?>,
      <? echo $_GET["prijmeni"] ?>!
  <?    
      function zobrazText($text) {
    echo  $text; 
}
    echo "<br />";
 $jmeno = "";
if(jePrazdne($jmeno)) {
    zobrazText("Nemas vyplnene jmeno");
}
    zobrazText($jmeno);
function jePrazdne($jmeno) {
    return empty($jmeno) || strlen($jmeno) < 2;
}
echo "<br />";
 $a = 3;
 $b = 6;
 echo ($a+$b)/$a*($b-$a);
 echo "<br />";

  
 
 
 ?>   
 </html>