<?php
/*
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/
$sentence='Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloribus, ut saepe illum accusantium ea molestias? Error facere fugit necessitatibus.'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class='mt-5 mb-3'> Censors</h2>
        <form action="./server.php" method="get">
        
        <div class="mb-3">
            <label for="sentence" class="form-label">Sentence</label>
            <textarea class="form-control" name="sentence" id="sentence" cols="30" rows="10"><?echo $sentence?></textarea>
            <small id="sentenceHelper" class="form-text text-muted">Add a paragraph to censor</small>
        </div>
        <div class="mb-3">
            <label for="sentence" class="form-label">Word</label>
            <input type="text" name="word" id="word" aria-describedby="sentenceHelper" placeholder="Type a word" value=""/>
            <small id="sentenceHelper" class="form-text text-muted">Write a word to censor</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Start censor</button>
    </div>
    
</body>
</html>