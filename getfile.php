La parola scelta dall'utente è <strong> <?php echo $_GET["text"]; ?></strong>
<br />

<?php
   $variabileTesto = "Il primo programma con linguaggio PHP";
?>

<h2>FRASE MODIFICATA CON INPUT DELL'UTENTE</h2>
 <?php
    $_GET["text"];
    echo str_replace(trim($_GET["text"]), "***", strtolower($variabileTesto));
?>

