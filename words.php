<?php
$discorso = "Bilbo non aveva per niente finito il discorso. Afferrò il corno di un giovanotto che era in piedi vicino a lui, e suonò tre volte con tutte le sue forze. Il fracasso cessò d'un colpo. «Non vi tratterrò a lungo», gridò acclamato dagli ospiti; «vi ho riuniti per un Motivo preciso». C'era qualcosa di preoccupante nel tono della sua voce. Il silenzio divenne quasi generale e un paio di Tuc aguzzarono le orecchie. «Anzi, per tre Motivi! Innanzi tutto per dirvi che voglio tanto bene a voi tutti, e che centoundici anni di vita in mezzo a gente così straordinaria ed ammirevole non sono sufficienti». Scroscio di applausi ed acclamazioni. «Conosco la metà di voi soltanto a metà; e nutro, per meno della metà di voi, metà dell'affetto che meritate». Era una frase inattesa e piuttosto intricata. Ci furono uno o due applausi qua e là, ma la maggior parte delle persone era troppo intensamente occupata a sbrogliarla per rendersi conto se era un complimento. «In secondo luogo, per festeggiare il mio compleanno». Altre acclamazioni. «o, per meglio dire, il nostro compleanno. Oggi ricorre infatti il compleanno del mio nipote ed erede Frodo, il quale raggiunge la maggiore età, e viene in possesso della sua eredità». Qualche anziano batté meccanicamente le mani e si levarono da parte dei giovani grida di «Viva Frodo! Frodo! Buon vecchio Frodo!». I Sackville-Baggins guardarono torvo, domandandosi cosa significasse «venire in possesso della sua eredità»"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<h1>Paragrafo</h1>
<p><?php echo $discorso ?></p>

<h2>Lunghezza paragrafo</h2>
<p><?php echo strlen($discorso) ?></p>

<hr>
<?php 
$censurato = str_replace('Frodo', '***', $discorso);
?>

<h3>Paragrafo censurato</h3>
<p><?php echo ($censurato) ?></p>

<h3>Lunghezza paragrafo censurato</h3>
<p><?php echo strlen($discorso) ?></p>


    
</body>
</html>