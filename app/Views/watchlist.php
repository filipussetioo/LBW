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
        <img class="card-img-top" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces" alt="Card image cap">
        <div class="card-body">
            <p class="card-text"><?= $watchlist_data['watchlist_title']?></p>
        </div>
    </div>
    <?php endforeach; ?>
</body>
</html>