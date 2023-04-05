<?php

// Stuttura dati degli hotel
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- Metodo 1 per mostrare la lista di hotel -->
    <!-- <ul>
        <?php for($i = 0; $i < count($hotels); $i++): ?>
            <li>
                <div><?php 
                echo "{$hotels[$i]['name']}
                {$hotels[$i]['description']} 
                {$hotels[$i]['parking']} 
                {$hotels[$i]['vote']} 
                {$hotels[$i]['distance_to_center']} km";
                echo '<hr>'
                 ?></div>
            </li>
        <?php endfor ?>
    </ul> -->

    <!-- Metodo 2 per mostrare la lista di hotel -->
    <!-- <ul>
        <?php foreach($hotels as $hotel): ?>
            <li>
                <?php foreach ($hotel as $value): ?>
                <div><?php echo $value; ?></div>
            </li>
            <?php endforeach ?>
            <hr>
            <?php endforeach ?>
    </ul> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel): ?>
                <tr>
                    <?php foreach ($hotel as $value): ?>
                        <td><?php echo $value ?></td>
                    <?php endforeach ?>
                 </tr>   
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>