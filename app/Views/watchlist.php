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
    <div class="wrapper">
        <div class="wrapper-title">
            <p>Recommended Streaming Platform</p>
            <?php if(!empty($watchlist_streaming_data)):?>
                <h2><?=substr($watchlist_streaming_data->streaming_platform,1,strlen($watchlist_streaming_data->streaming_platform)-2)?></h2>
            <?php endif?>
        </div>
        <div class="watchlist-container">
            <?php foreach($watchlist_data as $value):?>
                <div class="card">
                    <img class="card-img-top" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/<?= $value->backdrop_path?>" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-text"><?= $value->watchlist_title ?></h3>
                        <?php if($value->streaming_platform == "null"):?>
                            <p>OTT tidak tersedia</p>
                        <?php endif; ?>
                        <?php if($value->streaming_platform != "null")  :?>
                            <p>Tersedia di : <?= substr($value->streaming_platform,1,strlen($value->streaming_platform)-2) ?></p>
                        <?php endif; ?>    
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>