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
    <!-- <?php foreach($data as $value):?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces<?= $data['poster_path']?>" alt="Card image cap">
        <div class="card-body">
            <p class="card-text"><?= $data['overview']?></p>
        </div>
    </div>
    <?php endforeach; ?> -->
    <!-- echo $rowData["watchlist_title"].'<br>'; -->
    <?php if(mysqli_num_rows($queryResult) > 0): ?>
            <?php while($rowData = mysqli_fetch_array($queryResult)):?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces<?= $data['poster_path']?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><?=$rowData['watchlistId']?></p>
                        <p class="card-text"><?=$rowData['watchlist_title']?></p>
                        <p class="card-text"><?=$rowData['username']?></p>
                        <p class="card-text"><?=$rowData['streaming_platform']?></p>
                    </div>
                </div> <br>
            <?php endwhile; ?>
    <?php endif; ?>

    
    
</body>
</html>