<?php

// Funzioni

function randomPassword($length){
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.,!?[]{}';
$string = "";
$i = 0;
while($i<$length){
    $character= substr($characters,rand(0,strlen($characters)-1),1);
    $string .= $character;
    $i++;
}

return $string;
}


// Verifico che l'utente abbiamo messo i dati in pagina
if(isset($_GET['numbercharacter']) && !empty($_GET['numbercharacter'])) {
    $length = intval($_GET['numbercharacter']);

    $password = randomPassword($length);
    $message = 'La Password è stata generata con successo: ' . $password;
    $alert_class= 'alert-success';
    // Avvio la Sessione
    session_start();
    $_SESSION['password'] = $password;
    // Reindirizzo l'utente
    header('Location: success.php');
    die;
} else if((isset($_GET['numbercharacter']))) {
    $message = 'Compila i campi correttamente!';
    $alert_class= 'alert-danger';
} else {
    $message = '';
    $alert_class= '';
}


?>
