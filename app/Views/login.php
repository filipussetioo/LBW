<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?= view('template/header.php', ['css_dependencies' => ['']]) ?>
</head>

<body class="">
    <?= view('template/navbar.php', ['css_dependencies' => ['']]) ?>
<!--login modal-->
 <div class="scroll-down">SCROLL DOWN
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
   <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
 </svg></div>
<div class="container" id="modal-container"></div>
<!--carousel-->
<div class="slider-container">
    <div  id="trending-title">
        <!-- <h1>Trending Movies</h1> -->
    </div>
    <div class="slider-content">
            <?php foreach($dataMovies['results'] as $value): ?>
                <div class="slider-single">
                    <img class="slider-single-image" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/<?= $value['backdrop_path']?>">
                    <h1 class="slider-single-title">
                        <?= $value['title']?>
                    </h1>
                    <h3 class="slider-single-title bot">
                        <div class="slider-single-detail text">
                            <?php if(!empty($value['overview'])): ?>
                                <?= $value['overview']?>
                            <?php endif;?>
                            <?php if(empty($value['overview'])): ?>
                                <p>Deskripsi untuk film ini belum tersedia.</p>
                            <?php endif;?>
                        </div>
                        <div class="slider-single-detail vote">
                            <h4>Vote Average</h4>
                            <?= $value['vote_average']?>
                        </div>
                    </h3>
                </div>
            <?php endforeach; ?>
        
    </div>
</div>

<div class="slider-container2">
    <div  id="trending-title">
        <h1>Trending Series <?= session()->get('name'); ?></h1>
    </div>
    <div class="slider-content2">
        <?php foreach($dataSeries['results'] as $valueSeries):?>
        <div class="slider-single2">
            <img class="slider-single-image2" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/<?= $valueSeries['backdrop_path']?>" alt="1" />
            <h1 class="slider-single-title2" ><?= $valueSeries['name'] ?></h1>
            <h3 class="slider-single-title2">
                <?php if(!empty($valueSeries['overview'])): ?>
                    <?= $value['overview']?>
                <?php endif;?>
                <?php if(empty($valueSeries['overview'])): ?>
                    <p>Deskripsi untuk film ini belum tersedia.</p>
                <?php endif;?>
                <div class="slider-single-detail vote">
                            <h4>Vote Average</h4>
                            <?= $valueSeries['vote_average'];?>
                </div>
            </h3>
        </div>
        <?php endforeach?>

        
    </div>
</div>
</html>