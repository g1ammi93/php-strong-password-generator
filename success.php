<?php
session_start();

$alert_class ='alert-success';
$message = 'La Password è stata generata con successo: ' . $_SESSION['password'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
 <!-- Bootstrap -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body>
<div class="container">

<!-- Metto l'alert -->
<h1 class="text-center">Password Generator</h1>

    <div class="alert <?= $alert_class ?> mt-5" role="alert">
        <?= $message ?>
    </div>
   
</body>
</html>