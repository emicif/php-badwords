La parola scelta dall'utente è <strong> <?php echo trim($_GET["text"]); ?></strong>
<br />

<?php
   $variabileTesto = "Il primo programma con linguaggio PHP";
   
?>

<h2>FRASE MODIFICATA CON INPUT DELL'UTENTE</h2>
 <?php
   echo str_replace($_GET["text"], "***", $variabileTesto);
?>
