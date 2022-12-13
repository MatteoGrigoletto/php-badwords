<?php
    $text = "( Testo generato con ChatGPT )
    C'era una volta un reame incantato dove vivevano creature fantastiche e magia era all'ordine del giorno. 
    Il giovane principe era l'erede al trono, ma era stato rapito da un malvagio stregone che voleva impadronirsi del regno.
    La principessa, determinata a salvare il fratello, si unì a un gruppo di valorosi guerrieri e insieme partirono alla ricerca del principe.
     Durante il loro viaggio, incontrarono draghi, fate e altre creature misteriose.
    Finalmente arrivarono al castello del stregone, dove dovettero affrontare numerose sfide per arrivare alla torre dove il principe era tenuto prigioniero.
     Dopo un lungo scontro, riuscirono a sconfiggere il malvagio stregone e a liberare il principe.
    Il reame fu liberato dal suo malefico regnante e il principe e la principessa tornarono a governare insieme, riportando pace e prosperità nel loro regno incantato.
     La gente del reame vissero felici e contenti per sempre.";
    $word = $_GET['word'];
    $censure = str_replace($word , '***' , $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $censure . '<br>' . " La lunghezza della strinza e'di : " .  strlen($censure) . 'spazzi'?> </h1>
</body>
</html>

