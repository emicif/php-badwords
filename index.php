<?php

   //phpinfo()

?>


<!-- 
    - Creare una variabile con un paragrafo di testo a vostra scelta.
    - Stampare a schermo il paragrafo e la sua lunghezza.
    - Una parola da censurare viene passata dall'utente tramite parametro GET.
    - Stampare di nuovo il paragrafo e la sua lunghezza, 
        dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

 <h2>FRASE DA MODIFICARE</h2>
 <?php
   $variabileTesto = "Il primo programma con linguaggio PHP";
   echo($variabileTesto);
?>

<h4>Il numero di caratteri della stringa è: </h4>
 <?php
   echo strlen($variabileTesto);
?>



<h2>FRASE MODIFICATA</h2>



<form action="getfile.php" method="get">
Text: <input type="text" name="text" placeholder ="Scrivi la parola da censurare"/>
<input type="submit" />
</form>