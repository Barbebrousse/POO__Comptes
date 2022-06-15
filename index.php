<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>POO</title>
</head>
<body>
    <!-- Début du menu -->

    <?php include('layout/menu.php'); ?>

    <!-- Fin du Menu -->
    
    <main>
        <?php
        include_once('classes/dispatcher.php');

        $dispatcher = new Dispatcher;
        $dispatcher->Dispatch();
         ?>

    </main>



</body>
</html>