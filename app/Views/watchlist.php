<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= view('template/header.php', ['css_dependencies' => ['']]) ?>
</head>
<body>
    <?= view('template/navbar.php', ['css_dependencies' => ['']]) ?>
    <div>
        <h1>Your Watchlist</h1>
    </div>
    <?php foreach($watchlist_data as $value):?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/<?= $value->backdrop_path?>" alt="Card image cap">
        <div class="card-body">
            <p class="card-text"><?= $value->watchlist_title ?></p>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- echo $rowData["watchlist_title"].'<br>'; -->
    <div>
        <h1>Recommended Streaming Platform</h1>
        <?php foreach($watchlist_streaming_data as $value):?>
            <p><?= 
                $value->streaming_platform
                ?>
            </P>
        <?php endforeach;?>
    </div>

    
    
</body>
</html>