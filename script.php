<?php

// Funzioni

function randomPassword($length){
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
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
} else {
    $message = 'Compila i campi correttamente!';
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div class="container">

<!-- Metto l'alert -->
<h1 class="text-center">Password Generator</h1>

<div class="alert alert-success mt-5" role="alert">
   <?php echo $message; ?>
</div>
<!-- Form per Generare la Password -->
<form method="GET" action="" class="mt-5" >
  <div class="mb-3">
    <label for="numbercharacter" class="form-label">Quanti Caratteri deve essere lunga la password (min 5 / max 30)?</label>
    <input type="number" class="form-control" id="numbercharacter" name="numbercharacter" min="5" max="30">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="repeatcharacter" name="repeatcharacter">
    <label class="form-check-label" for="repeatcharacter">Consentire ripetizioni di caratteri?</label>
  </div>
  <button type="submit" class="btn btn-primary">Genera</button>
</form>
</div>




</body>
</html>